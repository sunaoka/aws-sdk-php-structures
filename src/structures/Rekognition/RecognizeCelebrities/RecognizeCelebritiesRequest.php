<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 */
class RecognizeCelebritiesRequest extends Request
{
    /**
     * @param array{Image: Shapes\Image} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
