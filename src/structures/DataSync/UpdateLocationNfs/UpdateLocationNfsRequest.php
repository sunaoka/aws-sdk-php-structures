<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationNfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property Shapes\OnPremConfig $OnPremConfig
 * @property Shapes\NfsMountOptions $MountOptions
 */
class UpdateLocationNfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     OnPremConfig?: Shapes\OnPremConfig,
     *     MountOptions?: Shapes\NfsMountOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
