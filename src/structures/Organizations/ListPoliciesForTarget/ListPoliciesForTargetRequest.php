<?php

namespace Sunaoka\Aws\Structures\Organizations\ListPoliciesForTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetId
 * @property 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2' $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPoliciesForTargetRequest extends Request
{
    /**
     * @param array{
     *     TargetId: string,
     *     Filter: 'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY'|'CHATBOT_POLICY'|'DECLARATIVE_POLICY_EC2',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
