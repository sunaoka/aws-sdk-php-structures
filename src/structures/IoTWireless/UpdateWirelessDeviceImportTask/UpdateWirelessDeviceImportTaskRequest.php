<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\SidewalkUpdateImportInfo $Sidewalk
 */
class UpdateWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Sidewalk: Shapes\SidewalkUpdateImportInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
