<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\InferredState $InferredState
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property 'Kilometers'|'Miles' $DistanceUnit
 */
class VerifyDevicePositionResponse extends Response
{
}
