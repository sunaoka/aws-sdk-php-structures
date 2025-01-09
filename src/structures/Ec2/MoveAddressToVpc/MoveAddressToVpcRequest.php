<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveAddressToVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PublicIp
 */
class MoveAddressToVpcRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PublicIp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
