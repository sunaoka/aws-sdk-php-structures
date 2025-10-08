<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteChangeSet;

trait DeleteChangeSetTrait
{
    /**
     * @param DeleteChangeSetRequest $args
     * @return DeleteChangeSetResponse
     */
    public function deleteChangeSet(DeleteChangeSetRequest $args)
    {
        $result = parent::deleteChangeSet($args->toArray());
        return new DeleteChangeSetResponse($result->toArray());
    }
}
