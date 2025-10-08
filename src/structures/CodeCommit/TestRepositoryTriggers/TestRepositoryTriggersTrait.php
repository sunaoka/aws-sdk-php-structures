<?php

namespace Sunaoka\Aws\Structures\CodeCommit\TestRepositoryTriggers;

trait TestRepositoryTriggersTrait
{
    /**
     * @param TestRepositoryTriggersRequest $args
     * @return TestRepositoryTriggersResponse
     */
    public function testRepositoryTriggers(TestRepositoryTriggersRequest $args)
    {
        $result = parent::testRepositoryTriggers($args->toArray());
        return new TestRepositoryTriggersResponse($result->toArray());
    }
}
