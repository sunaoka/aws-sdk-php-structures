<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Classification
 * @property string $GrokPattern
 * @property string $CustomPatterns
 */
class UpdateGrokClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Classification?: string,
     *     GrokPattern?: string,
     *     CustomPatterns?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
