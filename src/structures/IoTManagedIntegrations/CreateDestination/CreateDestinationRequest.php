<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryDestinationArn
 * @property 'KINESIS' $DeliveryDestinationType
 * @property string $Name
 * @property string $RoleArn
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateDestinationRequest extends Request
{
    /**
     * @param array{
     *     DeliveryDestinationArn: string,
     *     DeliveryDestinationType: 'KINESIS',
     *     Name: string,
     *     RoleArn: string,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
