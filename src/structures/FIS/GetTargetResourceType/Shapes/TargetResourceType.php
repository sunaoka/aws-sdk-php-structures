<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 * @property string|null $description
 * @property array<string, TargetResourceTypeParameter>|null $parameters
 */
class TargetResourceType extends Shape
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     description?: string|null,
     *     parameters?: array<string, TargetResourceTypeParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
