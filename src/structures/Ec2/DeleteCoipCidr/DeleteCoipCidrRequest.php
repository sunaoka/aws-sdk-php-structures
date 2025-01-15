<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property string $CoipPoolId
 * @property bool|null $DryRun
 */
class DeleteCoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     CoipPoolId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
