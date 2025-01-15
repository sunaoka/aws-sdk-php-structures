<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FaceId
 */
class DisassociatedFace extends Shape
{
    /**
     * @param array{FaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
