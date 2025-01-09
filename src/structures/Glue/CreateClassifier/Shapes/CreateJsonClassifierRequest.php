<?php

namespace Sunaoka\Aws\Structures\Glue\CreateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $JsonPath
 */
class CreateJsonClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     JsonPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
