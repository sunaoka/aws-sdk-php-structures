<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationNfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $ServerHostname
 * @property Shapes\OnPremConfig $OnPremConfig
 * @property Shapes\NfsMountOptions $MountOptions
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationNfsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory: string,
     *     ServerHostname: string,
     *     OnPremConfig: Shapes\OnPremConfig,
     *     MountOptions?: Shapes\NfsMountOptions,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
