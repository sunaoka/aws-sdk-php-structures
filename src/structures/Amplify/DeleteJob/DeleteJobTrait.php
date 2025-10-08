<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteJob;

trait DeleteJobTrait
{
    /**
     * @param DeleteJobRequest $args
     * @return DeleteJobResponse
     */
    public function deleteJob(DeleteJobRequest $args)
    {
        $result = parent::deleteJob($args->toArray());
        return new DeleteJobResponse($result->toArray());
    }
}
