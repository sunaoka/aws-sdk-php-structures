<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DeviceCreationFileList
 * @property string|null $Role
 * @property SidewalkPositioning|null $Positioning
 */
class SidewalkGetStartImportInfo extends Shape
{
    /**
     * @param array{
     *     DeviceCreationFileList?: list<string>|null,
     *     Role?: string|null,
     *     Positioning?: SidewalkPositioning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
