<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
