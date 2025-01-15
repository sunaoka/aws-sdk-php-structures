<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateEgressOnlyInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $VpcId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateEgressOnlyInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
