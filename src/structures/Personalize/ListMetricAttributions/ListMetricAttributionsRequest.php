<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetGroupArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListMetricAttributionsRequest extends Request
{
    /**
     * @param array{
     *     datasetGroupArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
