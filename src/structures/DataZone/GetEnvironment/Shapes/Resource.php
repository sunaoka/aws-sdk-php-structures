<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $provider
 * @property string $type
 * @property string $value
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     provider?: string|null,
     *     type: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
