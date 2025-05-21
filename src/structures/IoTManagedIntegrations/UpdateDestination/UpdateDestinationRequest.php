<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DeliveryDestinationArn
 * @property 'KINESIS'|null $DeliveryDestinationType
 * @property string|null $RoleArn
 * @property string|null $Description
 */
class UpdateDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DeliveryDestinationArn?: string|null,
     *     DeliveryDestinationType?: 'KINESIS'|null,
     *     RoleArn?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
