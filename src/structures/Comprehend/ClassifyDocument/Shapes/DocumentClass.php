<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property float|null $Score
 * @property int|null $Page
 */
class DocumentClass extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Score?: float|null,
     *     Page?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
