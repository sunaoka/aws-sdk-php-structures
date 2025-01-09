<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Patch $Patch
 * @property PatchStatus $PatchStatus
 */
class EffectivePatch extends Shape
{
    /**
     * @param array{
     *     Patch?: Patch,
     *     PatchStatus?: PatchStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
