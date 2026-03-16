<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListNetworkMigrationDefinitionsRequestFilters|null $filters
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListNetworkMigrationDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListNetworkMigrationDefinitionsRequestFilters|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
