<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteLimit;

trait DeleteLimitTrait
{
    /**
     * @param DeleteLimitRequest $args
     * @return DeleteLimitResponse
     */
    public function deleteLimit(DeleteLimitRequest $args)
    {
        $result = parent::deleteLimit($args->toArray());
        return new DeleteLimitResponse($result->toArray());
    }
}
