<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property string|null $User
 * @property string|null $Domain
 * @property string|null $Password
 * @property list<string>|null $AgentArns
 * @property Shapes\SmbMountOptions|null $MountOptions
 */
class UpdateLocationSmbRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     User?: string|null,
     *     Domain?: string|null,
     *     Password?: string|null,
     *     AgentArns?: list<string>|null,
     *     MountOptions?: Shapes\SmbMountOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
