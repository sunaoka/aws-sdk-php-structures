<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $type
 * @property string $value
 * @property string $name
 */
class UsagePlanKey extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     type?: string,
     *     value?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
