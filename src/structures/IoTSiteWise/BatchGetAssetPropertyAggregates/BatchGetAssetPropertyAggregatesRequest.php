<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetAssetPropertyAggregatesEntry> $entries
 * @property string $nextToken
 * @property int<1, max> $maxResults
 */
class BatchGetAssetPropertyAggregatesRequest extends Request
{
    /**
     * @param array{
     *     entries: list<Shapes\BatchGetAssetPropertyAggregatesEntry>,
     *     nextToken?: string,
     *     maxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
