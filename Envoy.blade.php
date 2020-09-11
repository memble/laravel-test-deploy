@servers(['local' => ['127.0.0.1']])

@task('foo', ['on' => 'local'])
    ls -la
@endtask
