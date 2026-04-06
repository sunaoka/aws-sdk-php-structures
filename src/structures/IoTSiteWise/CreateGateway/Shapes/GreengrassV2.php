<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $coreDeviceThingName
 * @property 'LINUX_AARCH64'|'LINUX_AMD64'|'WINDOWS_AMD64'|null $coreDeviceOperatingSystem
 */
class GreengrassV2 extends Shape
{
    /**
     * @param array{
     *     coreDeviceThingName: string,
     *     coreDeviceOperatingSystem?: 'LINUX_AARCH64'|'LINUX_AMD64'|'WINDOWS_AMD64'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
