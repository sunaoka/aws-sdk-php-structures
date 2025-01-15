<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InternetGatewayId
 * @property string $VpcId
 */
class DetachInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InternetGatewayId: string,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
