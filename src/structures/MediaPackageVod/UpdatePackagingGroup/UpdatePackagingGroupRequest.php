<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\UpdatePackagingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization $Authorization
 * @property string $Id
 */
class UpdatePackagingGroupRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
