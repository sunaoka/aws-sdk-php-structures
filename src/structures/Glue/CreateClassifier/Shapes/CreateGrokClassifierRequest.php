<?php

namespace Sunaoka\Aws\Structures\Glue\CreateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Classification
 * @property string $Name
 * @property string $GrokPattern
 * @property string|null $CustomPatterns
 */
class CreateGrokClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Classification: string,
     *     Name: string,
     *     GrokPattern: string,
     *     CustomPatterns?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
