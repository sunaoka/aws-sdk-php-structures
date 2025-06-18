<?php

namespace Sunaoka\Aws\Structures\Organizations\EnablePolicyType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RootId
 * @property 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY' $PolicyType
 */
class EnablePolicyTypeRequest extends Request
{
    /**
     * @param array{
     *     RootId: string,
     *     PolicyType: 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2'|'SECURITYHUB_POLICY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
