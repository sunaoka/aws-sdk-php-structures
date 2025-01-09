<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateMulticastGroupFromFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $MulticastGroupId
 */
class DisassociateMulticastGroupFromFuotaTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     MulticastGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
