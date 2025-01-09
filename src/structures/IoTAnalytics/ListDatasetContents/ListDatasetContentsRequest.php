<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasetContents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property \Aws\Api\DateTimeResult $scheduledOnOrAfter
 * @property \Aws\Api\DateTimeResult $scheduledBefore
 */
class ListDatasetContentsRequest extends Request
{
    /**
     * @param array{
     *     datasetName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     scheduledOnOrAfter?: \Aws\Api\DateTimeResult,
     *     scheduledBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
