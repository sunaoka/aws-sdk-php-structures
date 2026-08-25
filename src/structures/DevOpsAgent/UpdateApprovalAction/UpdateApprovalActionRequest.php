<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateApprovalAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $approvalId
 * @property 'APPROVED'|'REJECTED' $action
 * @property Shapes\ApprovalPattern|null $finalPattern
 * @property string|null $reason
 * @property int<1, 14400>|null $ttlSeconds
 * @property bool|null $singleUse
 */
class UpdateApprovalActionRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     approvalId: string,
     *     action: 'APPROVED'|'REJECTED',
     *     finalPattern?: Shapes\ApprovalPattern|null,
     *     reason?: string|null,
     *     ttlSeconds?: int<1, 14400>|null,
     *     singleUse?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
