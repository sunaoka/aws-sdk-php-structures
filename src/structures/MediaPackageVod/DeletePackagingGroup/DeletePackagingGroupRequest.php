<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DeletePackagingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeletePackagingGroupRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
