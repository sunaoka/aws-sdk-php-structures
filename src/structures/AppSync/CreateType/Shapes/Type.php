<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $arn
 * @property string|null $definition
 * @property 'SDL'|'JSON'|null $format
 */
class Type extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     arn?: string|null,
     *     definition?: string|null,
     *     format?: 'SDL'|'JSON'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
