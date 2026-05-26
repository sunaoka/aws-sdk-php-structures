<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $name
 * @property string|null $description
 * @property string $region
 * @property array<string, string> $parameters
 */
class ResourceConfiguration extends Shape
{
    /**
     * @param array{
     *     identifier: string,
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
