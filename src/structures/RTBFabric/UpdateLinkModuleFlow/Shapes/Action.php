<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkModuleFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoBidAction|null $noBid
 * @property HeaderTagAction|null $headerTag
 */
class Action extends Shape
{
    /**
     * @param array{
     *     noBid?: NoBidAction|null,
     *     headerTag?: HeaderTagAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
