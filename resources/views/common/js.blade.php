<script src="{{url('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{url('admin/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="{{url('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{url('admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="{{url('admin/assets/js/widgets.bundle.js')}}"></script>
		<script src="{{url('admin/assets/js/custom/widgets.js')}}"></script>
		<script src="{{url('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{url('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{url('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
<script>
	 async function ajaxFunction(type, url, data) {
        var result;


        await $.ajax({
            type: type,
            url: "{{config('services.api.api_url')}}" + url,
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data);
                result = data.data;

            }
        });
        return result;
    }
</script>