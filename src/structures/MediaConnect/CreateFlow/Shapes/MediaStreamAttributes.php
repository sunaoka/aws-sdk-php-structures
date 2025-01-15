<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Fmtp $Fmtp
 * @property string|null $Lang
 */
class MediaStreamAttributes extends Shape
{
    /**
     * @param array{
     *     Fmtp: Fmtp,
     *     Lang?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
