<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\GuardrailUsage $usage
 * @property 'NONE'|'GUARDRAIL_INTERVENED' $action
 * @property string|null $actionReason
 * @property list<Shapes\GuardrailOutputContent> $outputs
 * @property list<Shapes\GuardrailAssessment> $assessments
 * @property Shapes\GuardrailCoverage|null $guardrailCoverage
 */
class ApplyGuardrailResponse extends Response
{
}
