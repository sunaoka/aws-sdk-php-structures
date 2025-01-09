<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerUserProfileName
 */
class OwnershipSettings extends Shape
{
    /**
     * @param array{OwnerUserProfileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
