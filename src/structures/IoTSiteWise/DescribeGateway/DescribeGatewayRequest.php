<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 */
class DescribeGatewayRequest extends Request
{
    /**
     * @param array{gatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
