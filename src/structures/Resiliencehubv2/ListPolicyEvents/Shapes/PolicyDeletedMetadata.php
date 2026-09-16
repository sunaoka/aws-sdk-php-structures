<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $affectedServiceCount
 */
class PolicyDeletedMetadata extends Shape
{
    /**
     * @param array{affectedServiceCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
