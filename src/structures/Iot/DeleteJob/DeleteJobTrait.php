<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJob;

trait DeleteJobTrait
{
    /**
     * @param DeleteJobRequest $args
     * @return void
     */
    public function deleteJob(DeleteJobRequest $args)
    {
        parent::deleteJob($args->toArray());
    }
}
