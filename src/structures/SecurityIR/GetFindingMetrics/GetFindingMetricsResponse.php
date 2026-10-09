<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetFindingMetrics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $findingsIngestedSecurityHub
 * @property int $findingsIngestedGuardDuty
 * @property int $findingsTriaged
 * @property int $findingsTriagedFalsePositive
 * @property int $findingsInvestigated
 * @property int $findingsInvestigatedFalsePositive
 * @property int $findingsEscalated
 * @property int $findingsEscalatedFalsePositive
 * @property int $findingsTruePositive
 * @property int $findingsInvestigatedInProgress
 * @property int $findingsEscalatedInProgress
 */
class GetFindingMetricsResponse extends Response
{
}
