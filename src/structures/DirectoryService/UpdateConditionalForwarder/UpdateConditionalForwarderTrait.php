<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateConditionalForwarder;

trait UpdateConditionalForwarderTrait
{
    /**
     * @param UpdateConditionalForwarderRequest $args
     * @return UpdateConditionalForwarderResponse
     */
    public function updateConditionalForwarder(UpdateConditionalForwarderRequest $args)
    {
        $result = parent::updateConditionalForwarder($args->toArray());
        return new UpdateConditionalForwarderResponse($result->toArray());
    }
}
