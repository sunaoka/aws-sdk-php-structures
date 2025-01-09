<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageFrame\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageFrameId
 */
class ImageFrameInformation extends Shape
{
    /**
     * @param array{imageFrameId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
