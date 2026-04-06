<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountSuppressionAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SuppressionConditionThreshold $ConditionThreshold
 */
class SuppressionValidationAttributes extends Shape
{
    /**
     * @param array{ConditionThreshold: SuppressionConditionThreshold} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
