<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $producerID
 * @property string|null $segmentID
 * @property string|null $constructID
 * @property Shapes\ListNetworkMigrationInsightsFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListNetworkMigrationInsightsRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationDefinitionID: string,
     *     networkMigrationExecutionID?: string|null,
     *     producerID?: string|null,
     *     segmentID?: string|null,
     *     constructID?: string|null,
     *     filters?: Shapes\ListNetworkMigrationInsightsFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
