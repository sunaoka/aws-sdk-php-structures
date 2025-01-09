<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceEvaluationSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceEvaluationId
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 * @property Shapes\EvaluationStatus $EvaluationStatus
 * @property \Aws\Api\DateTimeResult $EvaluationStartTimestamp
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $Compliance
 * @property Shapes\EvaluationContext $EvaluationContext
 * @property Shapes\ResourceDetails $ResourceDetails
 */
class GetResourceEvaluationSummaryResponse extends Response
{
}
