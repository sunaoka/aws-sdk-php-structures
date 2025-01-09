<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPosition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<float> $Position
 * @property Shapes\Accuracy $Accuracy
 * @property 'GNSS' $SolverType
 * @property 'Semtech' $SolverProvider
 * @property string $SolverVersion
 * @property string $Timestamp
 */
class GetPositionResponse extends Response
{
}
