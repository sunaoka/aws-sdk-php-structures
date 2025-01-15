<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDeviceImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DeviceCreationFileList
 * @property string|null $Role
 */
class SidewalkGetStartImportInfo extends Shape
{
    /**
     * @param array{
     *     DeviceCreationFileList?: list<string>|null,
     *     Role?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
