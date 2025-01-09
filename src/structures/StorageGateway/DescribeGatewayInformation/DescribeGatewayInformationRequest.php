<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeGatewayInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DescribeGatewayInformationRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
