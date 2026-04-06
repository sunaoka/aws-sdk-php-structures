<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin;

class ObservabilityAdminClient extends \Aws\ObservabilityAdmin\ObservabilityAdminClient
{
    use GetTelemetryEvaluationStatus\GetTelemetryEvaluationStatusTrait;
    use GetTelemetryEvaluationStatusForOrganization\GetTelemetryEvaluationStatusForOrganizationTrait;
    use ListResourceTelemetry\ListResourceTelemetryTrait;
    use ListResourceTelemetryForOrganization\ListResourceTelemetryForOrganizationTrait;
    use StartTelemetryEvaluation\StartTelemetryEvaluationTrait;
    use StartTelemetryEvaluationForOrganization\StartTelemetryEvaluationForOrganizationTrait;
    use StopTelemetryEvaluation\StopTelemetryEvaluationTrait;
    use StopTelemetryEvaluationForOrganization\StopTelemetryEvaluationForOrganizationTrait;
}
