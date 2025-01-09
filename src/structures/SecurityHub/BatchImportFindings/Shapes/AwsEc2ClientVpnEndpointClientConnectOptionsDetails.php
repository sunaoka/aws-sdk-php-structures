<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $LambdaFunctionArn
 * @property AwsEc2ClientVpnEndpointClientConnectOptionsStatusDetails $Status
 */
class AwsEc2ClientVpnEndpointClientConnectOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     LambdaFunctionArn?: string,
     *     Status?: AwsEc2ClientVpnEndpointClientConnectOptionsStatusDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
