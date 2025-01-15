<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property bool|null $Cascade
 */
class DeleteIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     Cascade?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
