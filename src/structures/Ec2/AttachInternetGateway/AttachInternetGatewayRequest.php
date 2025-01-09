<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InternetGatewayId
 * @property string $VpcId
 */
class AttachInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InternetGatewayId: string,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
