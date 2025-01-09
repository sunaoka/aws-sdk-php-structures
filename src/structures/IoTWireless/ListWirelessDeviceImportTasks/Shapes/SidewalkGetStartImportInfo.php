<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDeviceImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DeviceCreationFileList
 * @property string $Role
 */
class SidewalkGetStartImportInfo extends Shape
{
    /**
     * @param array{
     *     DeviceCreationFileList?: list<string>,
     *     Role?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
