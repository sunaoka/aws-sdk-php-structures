<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Classification
 * @property string|null $GrokPattern
 * @property string|null $CustomPatterns
 */
class UpdateGrokClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Classification?: string|null,
     *     GrokPattern?: string|null,
     *     CustomPatterns?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
