<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
