<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetId
 * @property bool|null $DryRun
 */
class DeleteSubnetRequest extends Request
{
    /**
     * @param array{
     *     SubnetId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
