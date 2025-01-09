<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\GuardrailUsage $usage
 * @property 'NONE'|'GUARDRAIL_INTERVENED' $action
 * @property list<Shapes\GuardrailOutputContent> $outputs
 * @property list<Shapes\GuardrailAssessment> $assessments
 * @property Shapes\GuardrailCoverage $guardrailCoverage
 */
class ApplyGuardrailResponse extends Response
{
}
