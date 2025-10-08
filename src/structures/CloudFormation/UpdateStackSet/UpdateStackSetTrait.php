<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackSet;

trait UpdateStackSetTrait
{
    /**
     * @param UpdateStackSetRequest $args
     * @return UpdateStackSetResponse
     */
    public function updateStackSet(UpdateStackSetRequest $args)
    {
        $result = parent::updateStackSet($args->toArray());
        return new UpdateStackSetResponse($result->toArray());
    }
}
