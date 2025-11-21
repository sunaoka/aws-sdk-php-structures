<?php

namespace Sunaoka\Aws\Structures\Organizations\ListEffectivePolicyValidationErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY' $PolicyType
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListEffectivePolicyValidationErrorsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyType: 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
