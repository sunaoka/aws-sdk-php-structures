<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $description
 * @property array<string, TargetResourceTypeParameter> $parameters
 */
class TargetResourceType extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     description?: string,
     *     parameters?: array<string, TargetResourceTypeParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
