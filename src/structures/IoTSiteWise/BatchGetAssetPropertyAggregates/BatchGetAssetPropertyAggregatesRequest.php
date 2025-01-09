<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetAssetPropertyAggregatesEntry> $entries
 * @property string $nextToken
 * @property int $maxResults
 */
class BatchGetAssetPropertyAggregatesRequest extends Request
{
    /**
     * @param array{
     *     entries: list<Shapes\BatchGetAssetPropertyAggregatesEntry>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
