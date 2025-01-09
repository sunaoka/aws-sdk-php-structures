<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property bool $Cascade
 */
class DeleteIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     Cascade?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
