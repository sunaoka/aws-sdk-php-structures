<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListMulticastGroupsByFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $NextToken
 * @property int<0, 250> $MaxResults
 */
class ListMulticastGroupsByFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
