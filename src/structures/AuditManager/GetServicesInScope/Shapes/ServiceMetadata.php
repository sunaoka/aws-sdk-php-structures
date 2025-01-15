<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetServicesInScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $category
 */
class ServiceMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     category?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
