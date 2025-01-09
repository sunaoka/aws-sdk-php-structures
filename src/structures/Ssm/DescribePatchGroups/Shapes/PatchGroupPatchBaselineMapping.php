<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PatchGroup
 * @property PatchBaselineIdentity $BaselineIdentity
 */
class PatchGroupPatchBaselineMapping extends Shape
{
    /**
     * @param array{
     *     PatchGroup?: string,
     *     BaselineIdentity?: PatchBaselineIdentity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
