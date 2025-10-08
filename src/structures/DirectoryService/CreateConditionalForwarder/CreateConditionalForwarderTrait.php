<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateConditionalForwarder;

trait CreateConditionalForwarderTrait
{
    /**
     * @param CreateConditionalForwarderRequest $args
     * @return CreateConditionalForwarderResponse
     */
    public function createConditionalForwarder(CreateConditionalForwarderRequest $args)
    {
        $result = parent::createConditionalForwarder($args->toArray());
        return new CreateConditionalForwarderResponse($result->toArray());
    }
}
