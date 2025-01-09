<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Classification
 * @property string $RowTag
 */
class UpdateXMLClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Classification?: string,
     *     RowTag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
