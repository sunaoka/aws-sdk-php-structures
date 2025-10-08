<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListEnvironmentVpcs;

trait ListEnvironmentVpcsTrait
{
    /**
     * @param ListEnvironmentVpcsRequest $args
     * @return ListEnvironmentVpcsResponse
     */
    public function listEnvironmentVpcs(ListEnvironmentVpcsRequest $args)
    {
        $result = parent::listEnvironmentVpcs($args->toArray());
        return new ListEnvironmentVpcsResponse($result->toArray());
    }
}
