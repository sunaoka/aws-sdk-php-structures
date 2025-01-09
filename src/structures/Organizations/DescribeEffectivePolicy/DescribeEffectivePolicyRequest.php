<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeEffectivePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2' $PolicyType
 * @property string $TargetId
 */
class DescribeEffectivePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyType: 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2',
     *     TargetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
