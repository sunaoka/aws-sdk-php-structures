<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InternetGatewayId
 */
class DeleteInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InternetGatewayId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
