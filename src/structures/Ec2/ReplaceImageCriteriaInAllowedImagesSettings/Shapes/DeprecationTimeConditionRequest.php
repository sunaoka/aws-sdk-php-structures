<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $MaximumDaysSinceDeprecated
 */
class DeprecationTimeConditionRequest extends Shape
{
    /**
     * @param array{MaximumDaysSinceDeprecated?: int<0, 2147483647>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
