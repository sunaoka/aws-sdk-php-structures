<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $type
 * @property string|null $value
 * @property string|null $name
 */
class UsagePlanKey extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: string|null,
     *     value?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
