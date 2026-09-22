<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NodeFilters|null $nodeFilters
 * @property Shapes\EdgeFilters|null $edgeFilters
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<0, 3>|null $depth
 * @property int<1, 1000>|null $maxResults
 * @property int<1, 50>|null $maxEdgesPerNode
 * @property bool|null $includeMetadata
 * @property string|null $nextToken
 */
class GetContextGraphRequest extends Request
{
    /**
     * @param array{
     *     nodeFilters?: Shapes\NodeFilters|null,
     *     edgeFilters?: Shapes\EdgeFilters|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     depth?: int<0, 3>|null,
     *     maxResults?: int<1, 1000>|null,
     *     maxEdgesPerNode?: int<1, 50>|null,
     *     includeMetadata?: bool|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
