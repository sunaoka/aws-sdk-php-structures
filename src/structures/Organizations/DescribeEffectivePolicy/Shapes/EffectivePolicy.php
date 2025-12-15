<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeEffectivePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyContent
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property string|null $TargetId
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY'|'BEDROCK_POLICY'|'S3_POLICY'|'NETWORK_SECURITY_DIRECTOR_POLICY'|null $PolicyType
 */
class EffectivePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyContent?: string|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TargetId?: string|null,
     *     PolicyType?: 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'|'INSPECTOR_POLICY'|'UPGRADE_ROLLOUT_POLICY'|'BEDROCK_POLICY'|'S3_POLICY'|'NETWORK_SECURITY_DIRECTOR_POLICY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
