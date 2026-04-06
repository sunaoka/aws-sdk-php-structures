<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 */
class IAMConnectionMetadata extends Shape
{
    /**
     * @param array{RoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
