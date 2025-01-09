<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Fmtp $Fmtp
 * @property string $Lang
 */
class MediaStreamAttributes extends Shape
{
    /**
     * @param array{
     *     Fmtp: Fmtp,
     *     Lang?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
