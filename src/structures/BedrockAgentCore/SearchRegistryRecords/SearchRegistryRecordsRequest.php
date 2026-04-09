<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SearchRegistryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $searchQuery
 * @property list<string> $registryIds
 * @property int<1, 20>|null $maxResults
 * @property Shapes\MetadataFilterExpression|null $filters
 */
class SearchRegistryRecordsRequest extends Request
{
    /**
     * @param array{
     *     searchQuery: string,
     *     registryIds: list<string>,
     *     maxResults?: int<1, 20>|null,
     *     filters?: Shapes\MetadataFilterExpression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
