<?php

namespace Sunaoka\Aws\Structures\Organizations\EnablePolicyType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|null $Type
 * @property 'ENABLED'|'PENDING_ENABLE'|'PENDING_DISABLE'|null $Status
 */
class PolicyTypeSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|null,
     *     Status?: 'ENABLED'|'PENDING_ENABLE'|'PENDING_DISABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
