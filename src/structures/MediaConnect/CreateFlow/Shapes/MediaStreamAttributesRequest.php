<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FmtpRequest $Fmtp
 * @property string $Lang
 */
class MediaStreamAttributesRequest extends Shape
{
    /**
     * @param array{
     *     Fmtp?: FmtpRequest,
     *     Lang?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
