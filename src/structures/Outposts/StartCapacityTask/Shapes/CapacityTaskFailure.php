<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reason
 * @property 'UNSUPPORTED_CAPACITY_CONFIGURATION'|null $Type
 */
class CapacityTaskFailure extends Shape
{
    /**
     * @param array{
     *     Reason: string,
     *     Type?: 'UNSUPPORTED_CAPACITY_CONFIGURATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
