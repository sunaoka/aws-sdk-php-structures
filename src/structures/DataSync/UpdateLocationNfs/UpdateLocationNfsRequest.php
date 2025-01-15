<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationNfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property Shapes\OnPremConfig|null $OnPremConfig
 * @property Shapes\NfsMountOptions|null $MountOptions
 */
class UpdateLocationNfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     OnPremConfig?: Shapes\OnPremConfig|null,
     *     MountOptions?: Shapes\NfsMountOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
