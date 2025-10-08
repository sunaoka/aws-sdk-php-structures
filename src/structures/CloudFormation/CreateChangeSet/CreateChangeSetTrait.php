<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateChangeSet;

trait CreateChangeSetTrait
{
    /**
     * @param CreateChangeSetRequest $args
     * @return CreateChangeSetResponse
     */
    public function createChangeSet(CreateChangeSetRequest $args)
    {
        $result = parent::createChangeSet($args->toArray());
        return new CreateChangeSetResponse($result->toArray());
    }
}
