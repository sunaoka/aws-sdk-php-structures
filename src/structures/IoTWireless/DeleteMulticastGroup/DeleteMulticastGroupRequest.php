<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteMulticastGroupRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
