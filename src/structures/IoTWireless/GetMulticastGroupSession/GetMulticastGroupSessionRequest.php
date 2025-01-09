<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroupSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetMulticastGroupSessionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
