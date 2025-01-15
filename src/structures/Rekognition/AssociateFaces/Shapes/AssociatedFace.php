<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FaceId
 */
class AssociatedFace extends Shape
{
    /**
     * @param array{FaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
