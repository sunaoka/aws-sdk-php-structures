<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetTransitGatewayPolicyTableAssociationsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
