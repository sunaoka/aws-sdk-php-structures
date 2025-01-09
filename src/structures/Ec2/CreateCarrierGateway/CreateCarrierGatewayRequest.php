<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCarrierGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $ClientToken
 */
class CreateCarrierGatewayRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
