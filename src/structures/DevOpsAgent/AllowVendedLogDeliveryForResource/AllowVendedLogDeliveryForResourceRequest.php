<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AllowVendedLogDeliveryForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArnBeingAuthorized
 * @property string $deliverySourceArn
 * @property string|null $logType
 */
class AllowVendedLogDeliveryForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArnBeingAuthorized: string,
     *     deliverySourceArn: string,
     *     logType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
