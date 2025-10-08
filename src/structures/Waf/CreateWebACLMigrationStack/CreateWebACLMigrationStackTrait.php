<?php

namespace Sunaoka\Aws\Structures\Waf\CreateWebACLMigrationStack;

trait CreateWebACLMigrationStackTrait
{
    /**
     * @param CreateWebACLMigrationStackRequest $args
     * @return CreateWebACLMigrationStackResponse
     */
    public function createWebACLMigrationStack(CreateWebACLMigrationStackRequest $args)
    {
        $result = parent::createWebACLMigrationStack($args->toArray());
        return new CreateWebACLMigrationStackResponse($result->toArray());
    }
}
