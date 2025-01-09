<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $id
 * @property string $name
 * @property string $provider
 * @property ProvisioningProperties $provisioningProperties
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class EnvironmentBlueprintSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     id: string,
     *     name: string,
     *     provider: string,
     *     provisioningProperties: ProvisioningProperties,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
