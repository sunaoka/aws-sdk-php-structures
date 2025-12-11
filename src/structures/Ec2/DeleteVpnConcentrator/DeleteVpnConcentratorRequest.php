<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnConcentrator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConcentratorId
 * @property bool|null $DryRun
 */
class DeleteVpnConcentratorRequest extends Request
{
    /**
     * @param array{
     *     VpnConcentratorId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
