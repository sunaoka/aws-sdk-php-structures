<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListEventBuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $NextToken
 * @property int $Limit
 */
class ListEventBusesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
