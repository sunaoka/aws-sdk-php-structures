<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateMulticastGroupWithFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $MulticastGroupId
 */
class AssociateMulticastGroupWithFuotaTaskRequest extends Request
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
