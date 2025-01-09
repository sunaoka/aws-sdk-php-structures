<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Charset
 * @property string $Data
 */
class SimpleEmailPart extends Shape
{
    /**
     * @param array{
     *     Charset?: string,
     *     Data?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
