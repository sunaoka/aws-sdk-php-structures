<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property bool|null $DryRun
 */
class DeleteVpcRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
