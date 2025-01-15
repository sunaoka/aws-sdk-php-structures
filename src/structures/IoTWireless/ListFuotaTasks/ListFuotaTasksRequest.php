<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListFuotaTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 250>|null $MaxResults
 */
class ListFuotaTasksRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
