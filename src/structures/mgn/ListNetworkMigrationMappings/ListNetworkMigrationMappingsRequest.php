<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 * @property Shapes\ListNetworkMigrationMappingsFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListNetworkMigrationMappingsRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string,
     *     filters?: Shapes\ListNetworkMigrationMappingsFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
