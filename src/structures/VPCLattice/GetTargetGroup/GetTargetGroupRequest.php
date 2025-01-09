<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetGroupIdentifier
 */
class GetTargetGroupRequest extends Request
{
    /**
     * @param array{targetGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
