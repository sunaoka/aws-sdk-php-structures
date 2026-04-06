<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\PositionalAccuracy|null $Accuracy
 * @property string|null $DeviceId
 * @property list<double> $Position
 * @property array<string, string>|null $PositionProperties
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property \Aws\Api\DateTimeResult $SampleTime
 */
class GetDevicePositionResponse extends Response
{
}
