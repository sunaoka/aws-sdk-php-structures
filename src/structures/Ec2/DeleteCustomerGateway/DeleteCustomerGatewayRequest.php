<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCustomerGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomerGatewayId
 * @property bool $DryRun
 */
class DeleteCustomerGatewayRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
