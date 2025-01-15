<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCustomerGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomerGatewayId
 * @property bool|null $DryRun
 */
class DeleteCustomerGatewayRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
