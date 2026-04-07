<?php

namespace Sunaoka\Aws\Structures\S3Files\UpdateMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mountTargetId
 * @property list<string> $securityGroups
 */
class UpdateMountTargetRequest extends Request
{
    /**
     * @param array{
     *     mountTargetId: string,
     *     securityGroups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
