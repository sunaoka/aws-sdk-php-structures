<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetFuotaTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetFuotaTaskRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
