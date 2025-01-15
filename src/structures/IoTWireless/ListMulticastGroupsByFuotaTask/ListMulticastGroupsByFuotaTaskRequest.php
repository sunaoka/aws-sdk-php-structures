<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListMulticastGroupsByFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $NextToken
 * @property int<0, 250>|null $MaxResults
 */
class ListMulticastGroupsByFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
