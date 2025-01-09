<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $GroupName
 * @property string $VpcId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     Description: string,
     *     GroupName: string,
     *     VpcId?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
