<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRun;

trait DeleteRunTrait
{
    /**
     * @param DeleteRunRequest $args
     * @return void
     */
    public function deleteRun(DeleteRunRequest $args)
    {
        parent::deleteRun($args->toArray());
    }
}
