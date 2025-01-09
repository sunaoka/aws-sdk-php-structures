<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayMulticastDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property bool $DryRun
 */
class DeleteTransitGatewayMulticastDomainRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
