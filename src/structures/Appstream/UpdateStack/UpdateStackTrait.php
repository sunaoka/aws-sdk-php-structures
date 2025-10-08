<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack;

trait UpdateStackTrait
{
    /**
     * @param UpdateStackRequest $args
     * @return UpdateStackResponse
     */
    public function updateStack(UpdateStackRequest $args)
    {
        $result = parent::updateStack($args->toArray());
        return new UpdateStackResponse($result->toArray());
    }
}
