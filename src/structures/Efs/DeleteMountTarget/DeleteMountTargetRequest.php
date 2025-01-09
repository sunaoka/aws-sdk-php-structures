<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MountTargetId
 */
class DeleteMountTargetRequest extends Request
{
    /**
     * @param array{MountTargetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
