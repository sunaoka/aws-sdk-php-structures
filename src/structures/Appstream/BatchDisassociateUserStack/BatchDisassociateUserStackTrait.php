<?php

namespace Sunaoka\Aws\Structures\Appstream\BatchDisassociateUserStack;

trait BatchDisassociateUserStackTrait
{
    /**
     * @param BatchDisassociateUserStackRequest $args
     * @return BatchDisassociateUserStackResponse
     */
    public function batchDisassociateUserStack(BatchDisassociateUserStackRequest $args)
    {
        $result = parent::batchDisassociateUserStack($args->toArray());
        return new BatchDisassociateUserStackResponse($result->toArray());
    }
}
