<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcTenancy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property 'default' $InstanceTenancy
 * @property bool|null $DryRun
 */
class ModifyVpcTenancyRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     InstanceTenancy: 'default',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
