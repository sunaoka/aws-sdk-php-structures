<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateGatewayInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string|null $GatewayName
 * @property string|null $GatewayTimezone
 * @property string|null $CloudWatchLogGroupARN
 * @property 'Small'|'Medium'|'Large'|null $GatewayCapacity
 */
class UpdateGatewayInformationRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     GatewayName?: string|null,
     *     GatewayTimezone?: string|null,
     *     CloudWatchLogGroupARN?: string|null,
     *     GatewayCapacity?: 'Small'|'Medium'|'Large'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
