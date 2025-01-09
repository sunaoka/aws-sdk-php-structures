<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $JsonPath
 */
class UpdateJsonClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     JsonPath?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
