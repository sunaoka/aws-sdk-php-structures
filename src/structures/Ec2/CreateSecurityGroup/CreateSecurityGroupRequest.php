<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $GroupName
 * @property string|null $VpcId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     Description: string,
     *     GroupName: string,
     *     VpcId?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
