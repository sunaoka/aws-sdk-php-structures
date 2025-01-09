<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyActivityStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'locked'|'unlocked' $AuditPolicyState
 */
class ModifyActivityStreamRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     AuditPolicyState?: 'locked'|'unlocked'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
