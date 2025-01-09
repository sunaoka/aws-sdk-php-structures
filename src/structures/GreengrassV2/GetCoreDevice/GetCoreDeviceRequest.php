<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetCoreDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreDeviceThingName
 */
class GetCoreDeviceRequest extends Request
{
    /**
     * @param array{coreDeviceThingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
