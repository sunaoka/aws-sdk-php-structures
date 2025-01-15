<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Patch|null $Patch
 * @property PatchStatus|null $PatchStatus
 */
class EffectivePatch extends Shape
{
    /**
     * @param array{
     *     Patch?: Patch|null,
     *     PatchStatus?: PatchStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
