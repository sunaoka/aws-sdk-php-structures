<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService;

class IoT1ClickDevicesServiceClient extends \Aws\IoT1ClickDevicesService\IoT1ClickDevicesServiceClient
{
    use ClaimDevicesByClaimCode\ClaimDevicesByClaimCodeTrait;
    use DescribeDevice\DescribeDeviceTrait;
    use FinalizeDeviceClaim\FinalizeDeviceClaimTrait;
    use GetDeviceMethods\GetDeviceMethodsTrait;
    use InitiateDeviceClaim\InitiateDeviceClaimTrait;
    use InvokeDeviceMethod\InvokeDeviceMethodTrait;
    use ListDeviceEvents\ListDeviceEventsTrait;
    use ListDevices\ListDevicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UnclaimDevice\UnclaimDeviceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDeviceState\UpdateDeviceStateTrait;
}
