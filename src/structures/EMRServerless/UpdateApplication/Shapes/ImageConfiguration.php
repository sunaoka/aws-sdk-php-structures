<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageUri
 * @property string $resolvedImageDigest
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{
     *     imageUri: string,
     *     resolvedImageDigest?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
