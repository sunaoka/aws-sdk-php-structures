<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $usernameAttribute
 * @property string|null $prefix
 */
class IdentityMapping extends Shape
{
    /**
     * @param array{
     *     usernameAttribute: string,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
