<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelImageLaunchPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool $DryRun
 */
class CancelImageLaunchPermissionRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
