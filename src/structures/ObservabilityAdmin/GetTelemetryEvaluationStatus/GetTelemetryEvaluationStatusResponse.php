<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEvaluationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'STARTING'|'FAILED_START'|'RUNNING'|'STOPPING'|'FAILED_STOP'|'STOPPED'|null $Status
 * @property string|null $FailureReason
 */
class GetTelemetryEvaluationStatusResponse extends Response
{
}
