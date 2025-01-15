<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string|null $s3Location
 */
class Definition extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     s3Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
