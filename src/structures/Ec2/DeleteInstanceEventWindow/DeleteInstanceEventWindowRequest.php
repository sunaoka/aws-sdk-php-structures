<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property bool|null $ForceDelete
 * @property string $InstanceEventWindowId
 */
class DeleteInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ForceDelete?: bool|null,
     *     InstanceEventWindowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
