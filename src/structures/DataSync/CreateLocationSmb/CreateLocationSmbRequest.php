<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationSmb;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $ServerHostname
 * @property string $User
 * @property string|null $Domain
 * @property string $Password
 * @property list<string> $AgentArns
 * @property Shapes\SmbMountOptions|null $MountOptions
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationSmbRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory: string,
     *     ServerHostname: string,
     *     User: string,
     *     Domain?: string|null,
     *     Password: string,
     *     AgentArns: list<string>,
     *     MountOptions?: Shapes\SmbMountOptions|null,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
