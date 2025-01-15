<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasetContents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property \Aws\Api\DateTimeResult|null $scheduledOnOrAfter
 * @property \Aws\Api\DateTimeResult|null $scheduledBefore
 */
class ListDatasetContentsRequest extends Request
{
    /**
     * @param array{
     *     datasetName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     scheduledOnOrAfter?: \Aws\Api\DateTimeResult|null,
     *     scheduledBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
