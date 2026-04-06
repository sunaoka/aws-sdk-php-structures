<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanEvaluationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $planArn
 * @property \Aws\Api\DateTimeResult|null $lastEvaluationTime
 * @property string|null $lastEvaluatedVersion
 * @property string|null $region
 * @property 'passed'|'actionRequired'|'pendingEvaluation'|'unknown'|null $evaluationState
 * @property list<Shapes\ResourceWarning>|null $warnings
 * @property string|null $nextToken
 */
class GetPlanEvaluationStatusResponse extends Response
{
}
