<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetGroupIdentifier
 */
class DeleteTargetGroupRequest extends Request
{
    /**
     * @param array{targetGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
