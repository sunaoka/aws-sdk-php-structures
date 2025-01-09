<?php

namespace Sunaoka\Aws\Structures\LocationService\ListTrackerConsumers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTrackerConsumersRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
