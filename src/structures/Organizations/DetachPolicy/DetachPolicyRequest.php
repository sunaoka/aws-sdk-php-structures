<?php

namespace Sunaoka\Aws\Structures\Organizations\DetachPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $TargetId
 */
class DetachPolicyRequest extends Request
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
