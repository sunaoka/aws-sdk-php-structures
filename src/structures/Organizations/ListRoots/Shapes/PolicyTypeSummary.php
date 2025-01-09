<?php

namespace Sunaoka\Aws\Structures\Organizations\ListRoots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2' $Type
 * @property 'ENABLED'|'PENDING_ENABLE'|'PENDING_DISABLE' $Status
 */
class PolicyTypeSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2',
     *     Status?: 'ENABLED'|'PENDING_ENABLE'|'PENDING_DISABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
