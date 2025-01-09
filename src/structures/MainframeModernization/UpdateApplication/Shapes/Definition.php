<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $s3Location
 */
class Definition extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     s3Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
