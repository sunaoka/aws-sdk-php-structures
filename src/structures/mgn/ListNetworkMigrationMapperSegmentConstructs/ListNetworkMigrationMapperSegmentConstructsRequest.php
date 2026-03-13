<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegmentConstructs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 * @property string $segmentID
 * @property Shapes\ListNetworkMigrationMapperSegmentConstructsFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListNetworkMigrationMapperSegmentConstructsRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string,
     *     segmentID: string,
     *     filters?: Shapes\ListNetworkMigrationMapperSegmentConstructsFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
