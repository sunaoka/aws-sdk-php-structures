<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationChangeSet;

trait CreateCloudFormationChangeSetTrait
{
    /**
     * @param CreateCloudFormationChangeSetRequest $args
     * @return CreateCloudFormationChangeSetResponse
     */
    public function createCloudFormationChangeSet(CreateCloudFormationChangeSetRequest $args)
    {
        $result = parent::createCloudFormationChangeSet($args->toArray());
        return new CreateCloudFormationChangeSetResponse($result->toArray());
    }
}
