<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PatchGroup
 * @property PatchBaselineIdentity|null $BaselineIdentity
 */
class PatchGroupPatchBaselineMapping extends Shape
{
    /**
     * @param array{
     *     PatchGroup?: string|null,
     *     BaselineIdentity?: PatchBaselineIdentity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
