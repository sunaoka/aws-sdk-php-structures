<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCarrierGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class CreateCarrierGatewayRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
