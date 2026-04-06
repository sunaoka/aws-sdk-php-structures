<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteDeviceUsageData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceArn
 * @property 'VOICE' $DeviceUsageType
 */
class DeleteDeviceUsageDataRequest extends Request
{
    /**
     * @param array{
     *     DeviceArn: string,
     *     DeviceUsageType: 'VOICE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
