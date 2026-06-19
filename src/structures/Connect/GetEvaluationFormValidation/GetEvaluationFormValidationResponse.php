<?php

namespace Sunaoka\Aws\Structures\Connect\GetEvaluationFormValidation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property string|null $FailureReason
 * @property string $EvaluationFormId
 * @property int $EvaluationFormVersion
 * @property \Aws\Api\DateTimeResult $StartedTime
 * @property list<Shapes\EvaluationFormValidationFinding>|null $Findings
 */
class GetEvaluationFormValidationResponse extends Response
{
}
