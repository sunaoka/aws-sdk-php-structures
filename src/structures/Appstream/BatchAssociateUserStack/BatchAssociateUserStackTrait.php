<?php

namespace Sunaoka\Aws\Structures\Appstream\BatchAssociateUserStack;

trait BatchAssociateUserStackTrait
{
    /**
     * @param BatchAssociateUserStackRequest $args
     * @return BatchAssociateUserStackResponse
     */
    public function batchAssociateUserStack(BatchAssociateUserStackRequest $args)
    {
        $result = parent::batchAssociateUserStack($args->toArray());
        return new BatchAssociateUserStackResponse($result->toArray());
    }
}
