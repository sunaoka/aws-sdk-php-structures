<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $searchQuery
 * @property list<string> $registryIds
 * @property int<1, 50>|null $maxResults
 * @property Shapes\MetadataFilterExpression|null $filters
 * @property 'HYBRID'|'SEMANTIC'|'KEYWORD'|null $searchType
 * @property string|null $nextToken
 */
class SearchDiscoverableRegistryRecordsRequest extends Request
{
    /**
     * @param array{
     *     searchQuery: string,
     *     registryIds: list<string>,
     *     maxResults?: int<1, 50>|null,
     *     filters?: Shapes\MetadataFilterExpression|null,
     *     searchType?: 'HYBRID'|'SEMANTIC'|'KEYWORD'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
