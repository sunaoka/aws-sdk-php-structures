<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $arn
 * @property string $definition
 * @property 'SDL'|'JSON' $format
 */
class Type extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     arn?: string,
     *     definition?: string,
     *     format?: 'SDL'|'JSON'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
