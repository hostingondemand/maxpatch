<?php namespace modules\hodpatch\listener;
class ModulePostInstall extends  \lib\event\BaseListener{

    function handle($data)
    {
        $this->service->patch->setup();
        $this->service->patch->doPatch($data["name"]);
    }
}