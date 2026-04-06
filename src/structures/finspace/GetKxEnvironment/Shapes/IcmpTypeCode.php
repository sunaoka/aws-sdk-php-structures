<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $type
 * @property int $code
 */
class IcmpTypeCode extends Shape
{
    /**
     * @param array{
     *     type: int,
     *     code: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
