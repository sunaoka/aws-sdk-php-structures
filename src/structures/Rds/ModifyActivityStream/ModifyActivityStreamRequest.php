<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyActivityStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceArn
 * @property 'locked'|'unlocked'|null $AuditPolicyState
 */
class ModifyActivityStreamRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     AuditPolicyState?: 'locked'|'unlocked'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
