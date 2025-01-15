<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceEvaluationSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceEvaluationId
 * @property 'DETECTIVE'|'PROACTIVE'|null $EvaluationMode
 * @property Shapes\EvaluationStatus|null $EvaluationStatus
 * @property \Aws\Api\DateTimeResult|null $EvaluationStartTimestamp
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null $Compliance
 * @property Shapes\EvaluationContext|null $EvaluationContext
 * @property Shapes\ResourceDetails|null $ResourceDetails
 */
class GetResourceEvaluationSummaryResponse extends Response
{
}
