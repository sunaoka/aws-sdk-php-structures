<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LambdaFunctionArn
 * @property AwsEc2ClientVpnEndpointClientConnectOptionsStatusDetails|null $Status
 */
class AwsEc2ClientVpnEndpointClientConnectOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LambdaFunctionArn?: string|null,
     *     Status?: AwsEc2ClientVpnEndpointClientConnectOptionsStatusDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
