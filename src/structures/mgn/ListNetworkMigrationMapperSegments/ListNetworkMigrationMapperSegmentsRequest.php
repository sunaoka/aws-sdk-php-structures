<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 * @property Shapes\ListNetworkMigrationMapperSegmentsFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListNetworkMigrationMapperSegmentsRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string,
     *     filters?: Shapes\ListNetworkMigrationMapperSegmentsFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
