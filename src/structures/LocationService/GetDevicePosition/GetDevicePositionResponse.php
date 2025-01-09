<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property list<double> $Position
 * @property Shapes\PositionalAccuracy $Accuracy
 * @property array<string, string> $PositionProperties
 */
class GetDevicePositionResponse extends Response
{
}
