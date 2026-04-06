<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property string|null $CapabilityId
 * @property ValidationSchema|null $Schema
 */
class ManagedThingSchemaListItem extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     CapabilityId?: string|null,
     *     Schema?: ValidationSchema|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
