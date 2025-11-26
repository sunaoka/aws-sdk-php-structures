<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsWithInvalidEffectivePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY'|'BEDROCK_POLICY'|'S3_POLICY' $PolicyType
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListAccountsWithInvalidEffectivePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyType: 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY'|'BEDROCK_POLICY'|'S3_POLICY',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
