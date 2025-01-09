<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetServicesInScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $displayName
 * @property string $description
 * @property string $category
 */
class ServiceMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     displayName?: string,
     *     description?: string,
     *     category?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
