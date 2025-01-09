<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEvaluationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'STARTING'|'FAILED_START'|'RUNNING'|'STOPPING'|'FAILED_STOP'|'STOPPED' $Status
 * @property string $FailureReason
 */
class GetTelemetryEvaluationStatusResponse extends Response
{
}
