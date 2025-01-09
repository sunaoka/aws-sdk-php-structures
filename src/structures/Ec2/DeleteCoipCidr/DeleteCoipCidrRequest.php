<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property string $CoipPoolId
 * @property bool $DryRun
 */
class DeleteCoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     CoipPoolId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
