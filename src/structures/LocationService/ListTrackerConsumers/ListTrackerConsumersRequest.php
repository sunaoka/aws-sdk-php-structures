<?php

namespace Sunaoka\Aws\Structures\LocationService\ListTrackerConsumers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTrackerConsumersRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
