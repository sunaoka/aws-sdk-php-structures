<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $output
 * @property string $error
 * @property string $cause
 * @property Shapes\InspectionData $inspectionData
 * @property string $nextState
 * @property 'SUCCEEDED'|'FAILED'|'RETRIABLE'|'CAUGHT_ERROR' $status
 */
class TestStateResponse extends Response
{
}
