<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteWorkforce;

trait DeleteWorkforceTrait
{
    /**
     * @param DeleteWorkforceRequest $args
     * @return DeleteWorkforceResponse
     */
    public function deleteWorkforce(DeleteWorkforceRequest $args)
    {
        $result = parent::deleteWorkforce($args->toArray());
        return new DeleteWorkforceResponse($result->toArray());
    }
}
