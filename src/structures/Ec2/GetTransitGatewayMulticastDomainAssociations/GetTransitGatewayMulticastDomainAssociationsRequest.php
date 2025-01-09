<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayMulticastDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetTransitGatewayMulticastDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
