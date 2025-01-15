<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property list<double> $Position
 * @property Shapes\PositionalAccuracy|null $Accuracy
 * @property array<string, string>|null $PositionProperties
 */
class GetDevicePositionResponse extends Response
{
}
