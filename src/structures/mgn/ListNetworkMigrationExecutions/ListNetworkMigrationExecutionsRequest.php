<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 * @property Shapes\ListNetworkMigrationExecutionRequestFilters|null $filters
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListNetworkMigrationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationDefinitionID: string,
     *     filters?: Shapes\ListNetworkMigrationExecutionRequestFilters|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
