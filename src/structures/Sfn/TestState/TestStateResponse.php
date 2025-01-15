<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $output
 * @property string|null $error
 * @property string|null $cause
 * @property Shapes\InspectionData|null $inspectionData
 * @property string|null $nextState
 * @property 'SUCCEEDED'|'FAILED'|'RETRIABLE'|'CAUGHT_ERROR'|null $status
 */
class TestStateResponse extends Response
{
}
