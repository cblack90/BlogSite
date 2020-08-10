@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Add New Blog Post</h1>
            </div>
        </div>
        <hr class="m-t-10">
        <form action="{{route('posts.store')}}" method="post">
            {{ csrf_field() }}
            <div class="columns">
                <div class="column is-three-quarters">
                    <b-field>
                        <b-input placeholder="Post Title" size="is-large"></b-input>
                    </b-field>
                    <slug-widget></slug-widget>
                    <b-field>
                        <b-input type="textarea" placeholder="Compose your message..." rows="15"></b-input>
                    </b-field>
                </div> <!-- end of 3/4 column-->
                <div class="column is-one-quarter-desktop is-narrow-tablet">
                <div class="card card-widget">
                    <div class="author-widget widget-area">
                        <div class="selected-author">
                            <img src="https://via.placeholder.com/50"/>
                            <div class="author">
                                <h4>Chris Black</h4>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    
                    <div class="post-status-widget widget-area">
                        <div class="status">
                            <div class="status-icon">
                            <b-icon icon="assignment" size="is-medium"></b-icon>
                            </div>
                            <div class="status-details">
                            <h4><span class="status-emphasis">Draft</span> Saved</h4>
                            <p>A Few Minutes Ago</p>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="publish-buttons-widget widget-area">
                        <div class="secondary-action-button">
                            <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                        </div>
                        <div class="primary-action-button">
                            <button class="button is-primary is-fullwidth">Publish</button>
                        </div>
                    </div>
                </div>
                </div><!-- end of 1/4 column -->
            </div>
        </form>

    </div> <!-- end of flex container -->

    
@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {}
        });
    </script>
    
@endsection