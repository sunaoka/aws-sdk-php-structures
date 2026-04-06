<?php

namespace Sunaoka\Aws\Structures\Sms\GenerateChangeSet;

trait GenerateChangeSetTrait
{
    /**
     * @param GenerateChangeSetRequest $args
     * @return GenerateChangeSetResponse
     */
    public function generateChangeSet(GenerateChangeSetRequest $args)
    {
        $result = parent::generateChangeSet($args->toArray());
        return new GenerateChangeSetResponse($result->toArray());
    }
}
