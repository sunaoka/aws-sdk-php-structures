<?php

namespace Sunaoka\Aws\Structures\Organizations\ListEffectivePolicyValidationErrors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AccountId
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY'|null $PolicyType
 * @property string|null $Path
 * @property \Aws\Api\DateTimeResult|null $EvaluationTimestamp
 * @property string|null $NextToken
 * @property list<Shapes\EffectivePolicyValidationError>|null $EffectivePolicyValidationErrors
 */
class ListEffectivePolicyValidationErrorsResponse extends Response
{
}
