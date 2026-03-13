<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 * @property list<Shapes\StartNetworkMigrationMappingUpdateConstruct>|null $constructs
 * @property list<Shapes\StartNetworkMigrationMappingUpdateSegment>|null $segments
 */
class StartNetworkMigrationMappingUpdateRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string,
     *     constructs?: list<Shapes\StartNetworkMigrationMappingUpdateConstruct>|null,
     *     segments?: list<Shapes\StartNetworkMigrationMappingUpdateSegment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
