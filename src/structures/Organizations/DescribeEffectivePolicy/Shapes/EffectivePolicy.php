<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeEffectivePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyContent
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property string $TargetId
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2' $PolicyType
 */
class EffectivePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyContent?: string,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     TargetId?: string,
     *     PolicyType?: 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
