<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FmtpRequest|null $Fmtp
 * @property string|null $Lang
 */
class MediaStreamAttributesRequest extends Shape
{
    /**
     * @param array{
     *     Fmtp?: FmtpRequest|null,
     *     Lang?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
