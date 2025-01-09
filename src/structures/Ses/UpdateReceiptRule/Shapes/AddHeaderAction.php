<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HeaderName
 * @property string $HeaderValue
 */
class AddHeaderAction extends Shape
{
    /**
     * @param array{
     *     HeaderName: string,
     *     HeaderValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
