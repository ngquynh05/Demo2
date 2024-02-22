$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url){
    if(confirm("ban co chac chan xoa danh muc nay khong ")){
        $.ajax({
            type:[DELETE],
            datatype: [JSON],
            data: {id},
            url: url,
            success: function(result){
                if(result.error ===false){
                    arlet(result.massage);
                    location.reload();
                }
                else{
                    erlet("loi! vui long thu lai")
                }
            }
        })
    }
}