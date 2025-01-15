<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'public'|'private'|null $getObject
 * @property bool|null $allowPublicOverrides
 */
class AccessRules extends Shape
{
    /**
     * @param array{
     *     getObject?: 'public'|'private'|null,
     *     allowPublicOverrides?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
