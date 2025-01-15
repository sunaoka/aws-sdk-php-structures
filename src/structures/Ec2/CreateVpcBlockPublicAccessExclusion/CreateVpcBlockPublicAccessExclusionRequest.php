<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcBlockPublicAccessExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $SubnetId
 * @property string|null $VpcId
 * @property 'allow-bidirectional'|'allow-egress' $InternetGatewayExclusionMode
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateVpcBlockPublicAccessExclusionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SubnetId?: string|null,
     *     VpcId?: string|null,
     *     InternetGatewayExclusionMode: 'allow-bidirectional'|'allow-egress',
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
