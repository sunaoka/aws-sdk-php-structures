<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateGatewayInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $GatewayName
 * @property string $GatewayTimezone
 * @property string $CloudWatchLogGroupARN
 * @property 'Small'|'Medium'|'Large' $GatewayCapacity
 */
class UpdateGatewayInformationRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     GatewayName?: string,
     *     GatewayTimezone?: string,
     *     CloudWatchLogGroupARN?: string,
     *     GatewayCapacity?: 'Small'|'Medium'|'Large'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
