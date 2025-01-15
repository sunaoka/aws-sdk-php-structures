<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Charset
 * @property string|null $Data
 */
class SimpleEmailPart extends Shape
{
    /**
     * @param array{
     *     Charset?: string|null,
     *     Data?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
