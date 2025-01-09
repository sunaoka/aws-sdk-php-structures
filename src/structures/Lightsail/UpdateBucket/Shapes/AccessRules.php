<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'public'|'private' $getObject
 * @property bool $allowPublicOverrides
 */
class AccessRules extends Shape
{
    /**
     * @param array{
     *     getObject?: 'public'|'private',
     *     allowPublicOverrides?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
