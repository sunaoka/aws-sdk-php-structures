<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetMulticastGroupRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
