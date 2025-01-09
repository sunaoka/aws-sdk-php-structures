<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListFuotaTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 250> $MaxResults
 */
class ListFuotaTasksRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
