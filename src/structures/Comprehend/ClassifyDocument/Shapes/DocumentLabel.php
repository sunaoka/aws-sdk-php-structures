<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property float $Score
 * @property int $Page
 */
class DocumentLabel extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Score?: float,
     *     Page?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
