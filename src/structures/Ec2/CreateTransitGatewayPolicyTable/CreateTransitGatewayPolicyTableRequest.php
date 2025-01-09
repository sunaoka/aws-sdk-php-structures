<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPolicyTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayPolicyTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
