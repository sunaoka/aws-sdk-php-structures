<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PatchFilter> $PatchFilters
 */
class PatchFilterGroup extends Shape
{
    /**
     * @param array{PatchFilters: list<PatchFilter>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
