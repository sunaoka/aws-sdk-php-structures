<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcBlockPublicAccessExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $SubnetId
 * @property string $VpcId
 * @property 'allow-bidirectional'|'allow-egress' $InternetGatewayExclusionMode
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateVpcBlockPublicAccessExclusionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SubnetId?: string,
     *     VpcId?: string,
     *     InternetGatewayExclusionMode: 'allow-bidirectional'|'allow-egress',
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
