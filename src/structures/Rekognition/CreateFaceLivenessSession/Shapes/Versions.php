<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Minimum
 * @property string|null $Maximum
 */
class Versions extends Shape
{
    /**
     * @param array{
     *     Minimum?: string|null,
     *     Maximum?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
