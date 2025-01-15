<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2>|null $Dollars
 * @property int<0, 99>|null $Cents
 * @property int<0, 9>|null $TenthFractionsOfACent
 */
class USD extends Shape
{
    /**
     * @param array{
     *     Dollars?: int<0, 2>|null,
     *     Cents?: int<0, 99>|null,
     *     TenthFractionsOfACent?: int<0, 9>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
