<?php

namespace Sunaoka\Aws\Structures\Organizations\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property string $Description
 * @property string $Name
 * @property 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2' $Type
 * @property list<Shapes\Tag> $Tags
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Description: string,
     *     Name: string,
     *     Type: 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
