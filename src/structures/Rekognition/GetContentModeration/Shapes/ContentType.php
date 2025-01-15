<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Confidence
 * @property string|null $Name
 */
class ContentType extends Shape
{
    /**
     * @param array{
     *     Confidence?: float|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
