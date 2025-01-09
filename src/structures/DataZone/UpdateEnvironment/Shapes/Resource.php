<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $provider
 * @property string $type
 * @property string $value
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     provider?: string,
     *     type: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
