<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property Shapes\TransitGatewayRequestOptions|null $Options
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Options?: Shapes\TransitGatewayRequestOptions|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
