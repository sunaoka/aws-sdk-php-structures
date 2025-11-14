<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceCreationFile
 * @property string|null $Role
 * @property SidewalkPositioning|null $Positioning
 */
class SidewalkStartImportInfo extends Shape
{
    /**
     * @param array{
     *     DeviceCreationFile?: string|null,
     *     Role?: string|null,
     *     Positioning?: SidewalkPositioning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
