<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string $id
 * @property string $name
 * @property string $provider
 * @property ProvisioningProperties $provisioningProperties
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EnvironmentBlueprintSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     id: string,
     *     name: string,
     *     provider: string,
     *     provisioningProperties: ProvisioningProperties,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
