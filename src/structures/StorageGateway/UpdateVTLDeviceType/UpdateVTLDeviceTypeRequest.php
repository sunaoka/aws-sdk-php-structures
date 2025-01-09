<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateVTLDeviceType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VTLDeviceARN
 * @property string $DeviceType
 */
class UpdateVTLDeviceTypeRequest extends Request
{
    /**
     * @param array{
     *     VTLDeviceARN: string,
     *     DeviceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
