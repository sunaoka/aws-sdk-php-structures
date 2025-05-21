<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $DeliveryDestinationArn
 * @property 'KINESIS'|null $DeliveryDestinationType
 * @property string|null $Name
 * @property string|null $RoleArn
 */
class DestinationSummary extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DeliveryDestinationArn?: string|null,
     *     DeliveryDestinationType?: 'KINESIS'|null,
     *     Name?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
