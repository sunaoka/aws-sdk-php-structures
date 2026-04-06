<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string $provider
 * @property ProvisioningProperties $provisioningProperties
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EnvironmentBlueprintSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     provider: string,
     *     provisioningProperties: ProvisioningProperties,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
