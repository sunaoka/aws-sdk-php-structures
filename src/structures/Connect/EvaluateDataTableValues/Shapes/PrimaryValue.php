<?php

namespace Sunaoka\Aws\Structures\Connect\EvaluateDataTableValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $Value
 */
class PrimaryValue extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
