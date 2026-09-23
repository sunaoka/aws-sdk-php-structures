<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $tags
 * @property AlbConfiguration|null $albConfig
 */
class ResourceCriteria extends Shape
{
    /**
     * @param array{
     *     tags?: array<string, string>|null,
     *     albConfig?: AlbConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
