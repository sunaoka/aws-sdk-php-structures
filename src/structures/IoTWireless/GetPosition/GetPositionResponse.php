<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPosition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<float>|null $Position
 * @property Shapes\Accuracy|null $Accuracy
 * @property 'GNSS'|null $SolverType
 * @property 'Semtech'|null $SolverProvider
 * @property string|null $SolverVersion
 * @property string|null $Timestamp
 */
class GetPositionResponse extends Response
{
}
