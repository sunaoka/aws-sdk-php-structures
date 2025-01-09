<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property bool $DryRun
 * @property string $VpcId
 */
class CreateNetworkAclRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
