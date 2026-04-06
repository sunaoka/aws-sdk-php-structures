<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayMeteringPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMeteringPolicyId
 * @property bool|null $DryRun
 */
class DeleteTransitGatewayMeteringPolicyRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMeteringPolicyId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
