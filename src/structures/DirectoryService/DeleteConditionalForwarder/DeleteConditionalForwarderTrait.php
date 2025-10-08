<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteConditionalForwarder;

trait DeleteConditionalForwarderTrait
{
    /**
     * @param DeleteConditionalForwarderRequest $args
     * @return DeleteConditionalForwarderResponse
     */
    public function deleteConditionalForwarder(DeleteConditionalForwarderRequest $args)
    {
        $result = parent::deleteConditionalForwarder($args->toArray());
        return new DeleteConditionalForwarderResponse($result->toArray());
    }
}
