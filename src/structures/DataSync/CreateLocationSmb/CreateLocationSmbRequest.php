<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $ServerHostname
 * @property string $User
 * @property string $Domain
 * @property string $Password
 * @property list<string> $AgentArns
 * @property Shapes\SmbMountOptions $MountOptions
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationSmbRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory: string,
     *     ServerHostname: string,
     *     User: string,
     *     Domain?: string,
     *     Password: string,
     *     AgentArns: list<string>,
     *     MountOptions?: Shapes\SmbMountOptions,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
