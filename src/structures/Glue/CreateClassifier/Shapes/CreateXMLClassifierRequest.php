<?php

namespace Sunaoka\Aws\Structures\Glue\CreateClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Classification
 * @property string $Name
 * @property string $RowTag
 */
class CreateXMLClassifierRequest extends Shape
{
    /**
     * @param array{
     *     Classification: string,
     *     Name: string,
     *     RowTag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
