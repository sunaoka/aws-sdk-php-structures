<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $provider
 * @property string|null $name
 * @property string $value
 * @property string $type
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     provider?: string|null,
     *     name?: string|null,
     *     value: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
