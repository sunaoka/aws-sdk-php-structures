<?php

namespace Sunaoka\Aws\Structures\Ec2\WithdrawByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property bool|null $DryRun
 */
class WithdrawByoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
