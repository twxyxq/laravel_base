@extends('layouts.page')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-md-10 col-md-offset-1">
	        <div class="panel panel-default">
	            <div class="panel-heading">
    				<span class="glyphicon glyphicon-home"></span> <a href="/home">个人工作台</a>
    			</div>

	            <div class="panel-body">
	            	<li class='panel_nav_item col-xs-6 col-sm-4 col-md-3 col-lg-2'>
	            		<a href='/panel/to_do_list'>
	            			<span class='glyphicon glyphicon-tasks' style='display:block;font-size:30px;'></span>
	            			<span id='todolist'>待办流程</span>
            			</a>
            		</li>
	            	<li class='panel_nav_item col-xs-6 col-sm-4 col-md-3 col-lg-2'>
	            		<a href='/panel/authority'>
	            			<span class='glyphicon glyphicon-user' style='display:block;font-size:30px;'></span>
	            			<span id='authority'>人员授权</span>
            			</a>
            		</li>
            		@if(strpos(Auth::user()->auth,"{weld_manager}") !== false)
		            	<li class='panel_nav_item col-xs-6 col-sm-4 col-md-3 col-lg-2'>
		            		<a href='/panel/wj_rate_check_super'>
		            			<span class='glyphicon glyphicon-globe' style='display:block;font-size:30px;'></span>
		            			<span id='rate_check_super'>检验比例SUPER</span>
	            			</a>
	            		</li>
            		@endif
            		@if(strpos(Auth::user()->auth,"{weld_syn}") !== false)
	            	<li class='panel_nav_item col-xs-6 col-sm-4 col-md-3 col-lg-2'>
	            		<a href='/panel/wj_rate_check'>
	            			<span class='glyphicon glyphicon-globe' style='display:block;font-size:30px;'></span>
	            			<span id='rate_check'>检验比例检查</span>
            			</a>
            		</li>
            		@endif
            		<li class='panel_nav_item col-xs-6 col-sm-4 col-md-3 col-lg-2'>
	            		<a href='###' onclick="new_flavr('/panel/change_user_password')">
	            			<span class='glyphicon glyphicon-tasks' style='display:block;font-size:30px;'></span>
	            			<span id='todolist'>修改密码</span>
            			</a>
            		</li>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<div>
</div>
<div class="container">
	<div class="row">
	    <div class="col-md-10 col-md-offset-1">
	        <div class="panel panel-default">
	            <div class="panel-heading">
    				<span class="glyphicon glyphicon-home"></span> 模块快速选择
    			</div>

	            <div class="panel-body">
	            	@foreach($panel_nav as $nav)
						<li class='panel_nav_item col-xs-6 col-sm-4 col-md-3 col-lg-2'>
							<a href='/{{$nav[0]}}'>
								<span class='{{$nav[2]==""?"glyphicon glyphicon-th":$nav[2]}}' style='display:block;font-size:30px;'></span>
								<span id='{{$nav[0]}}'>{{$nav[1]}}</span>
							</a>
						</li>
					@endforeach
	            </div>
	        </div>
	    </div>
	</div>
</div>
<div>
</div>
@endsection

