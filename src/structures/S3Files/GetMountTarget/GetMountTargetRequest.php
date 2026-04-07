<?php

namespace Sunaoka\Aws\Structures\S3Files\GetMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mountTargetId
 */
class GetMountTargetRequest extends Request
{
    /**
     * @param array{mountTargetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
