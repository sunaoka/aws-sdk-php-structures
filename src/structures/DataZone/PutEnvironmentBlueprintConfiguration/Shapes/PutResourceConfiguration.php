<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $region
 * @property array<string, string> $parameters
 */
class PutResourceConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     region: string,
     *     parameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
