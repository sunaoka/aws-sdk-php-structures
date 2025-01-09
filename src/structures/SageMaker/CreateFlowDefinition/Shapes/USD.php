<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Dollars
 * @property int $Cents
 * @property int $TenthFractionsOfACent
 */
class USD extends Shape
{
    /**
     * @param array{
     *     Dollars?: int,
     *     Cents?: int,
     *     TenthFractionsOfACent?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
