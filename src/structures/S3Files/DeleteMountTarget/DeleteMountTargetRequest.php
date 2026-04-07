<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mountTargetId
 */
class DeleteMountTargetRequest extends Request
{
    /**
     * @param array{mountTargetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
