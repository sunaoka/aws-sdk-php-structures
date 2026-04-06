<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Value
 */
class ScalarReferenceDetails extends Shape
{
    /**
     * @param array{Value?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
