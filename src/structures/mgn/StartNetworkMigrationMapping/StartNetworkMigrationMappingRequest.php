<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 * @property 'MAP'|'SKIP'|null $securityGroupMappingStrategy
 */
class StartNetworkMigrationMappingRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string,
     *     securityGroupMappingStrategy?: 'MAP'|'SKIP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
