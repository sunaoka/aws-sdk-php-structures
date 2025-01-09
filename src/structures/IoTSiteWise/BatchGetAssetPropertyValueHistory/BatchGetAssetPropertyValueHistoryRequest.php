<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetAssetPropertyValueHistoryEntry> $entries
 * @property string $nextToken
 * @property int $maxResults
 */
class BatchGetAssetPropertyValueHistoryRequest extends Request
{
    /**
     * @param array{
     *     entries: list<Shapes\BatchGetAssetPropertyValueHistoryEntry>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
