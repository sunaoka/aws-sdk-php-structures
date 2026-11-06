<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobUpgradeAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobName
 * @property string $analysisId
 * @property 'OBSERVING'|'WAITING_FOR_CONSENT'|'UPGRADING'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|'STOPPED' $status
 * @property string|null $sourceVersion
 * @property string $targetVersion
 * @property 'AUTO_UPGRADE'|null $analysisType
 * @property string|null $autoUpgradeEvaluationSummary
 * @property string|null $errorMessage
 * @property string|null $autoUpgradeEligibilitySummary
 */
class GetJobUpgradeAnalysisResponse extends Response
{
}
