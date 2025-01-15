<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InternetGatewayId
 */
class DeleteInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InternetGatewayId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
