<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Uid
 * @property int $Gid
 */
class CustomPosixUserConfig extends Shape
{
    /**
     * @param array{
     *     Uid: int,
     *     Gid: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
