<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property bool $ForceDelete
 * @property string $InstanceEventWindowId
 */
class DeleteInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ForceDelete?: bool,
     *     InstanceEventWindowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
