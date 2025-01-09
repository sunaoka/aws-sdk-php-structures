<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateEgressOnlyInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property bool $DryRun
 * @property string $VpcId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateEgressOnlyInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
