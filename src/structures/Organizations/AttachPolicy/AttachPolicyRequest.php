<?php

namespace Sunaoka\Aws\Structures\Organizations\AttachPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $TargetId
 */
class AttachPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     TargetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
