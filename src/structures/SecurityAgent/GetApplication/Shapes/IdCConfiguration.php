<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $idcApplicationArn
 * @property string|null $idcInstanceArn
 */
class IdCConfiguration extends Shape
{
    /**
     * @param array{
     *     idcApplicationArn?: string|null,
     *     idcInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
