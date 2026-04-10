<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEvaluationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'STARTING'|'FAILED_START'|'RUNNING'|'STOPPING'|'FAILED_STOP'|'STOPPED'|null $Status
 * @property string|null $FailureReason
 * @property string|null $HomeRegion
 * @property list<Shapes\RegionStatus>|null $RegionStatuses
 */
class GetTelemetryEvaluationStatusResponse extends Response
{
}
