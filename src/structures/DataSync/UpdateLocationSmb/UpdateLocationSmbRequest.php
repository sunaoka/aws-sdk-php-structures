<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property string $User
 * @property string $Domain
 * @property string $Password
 * @property list<string> $AgentArns
 * @property Shapes\SmbMountOptions $MountOptions
 */
class UpdateLocationSmbRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     User?: string,
     *     Domain?: string,
     *     Password?: string,
     *     AgentArns?: list<string>,
     *     MountOptions?: Shapes\SmbMountOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
