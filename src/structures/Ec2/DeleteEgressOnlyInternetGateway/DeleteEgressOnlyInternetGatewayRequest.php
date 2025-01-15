<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteEgressOnlyInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $EgressOnlyInternetGatewayId
 */
class DeleteEgressOnlyInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     EgressOnlyInternetGatewayId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
