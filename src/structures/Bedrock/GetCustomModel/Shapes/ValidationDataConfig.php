<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Validator> $validators
 */
class ValidationDataConfig extends Shape
{
    /**
     * @param array{validators: list<Validator>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
