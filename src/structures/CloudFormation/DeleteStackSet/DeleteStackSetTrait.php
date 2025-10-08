<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStackSet;

trait DeleteStackSetTrait
{
    /**
     * @param DeleteStackSetRequest $args
     * @return DeleteStackSetResponse
     */
    public function deleteStackSet(DeleteStackSetRequest $args)
    {
        $result = parent::deleteStackSet($args->toArray());
        return new DeleteStackSetResponse($result->toArray());
    }
}
