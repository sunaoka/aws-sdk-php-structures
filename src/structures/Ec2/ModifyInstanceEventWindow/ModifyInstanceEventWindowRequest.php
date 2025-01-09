<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Name
 * @property string $InstanceEventWindowId
 * @property list<Shapes\InstanceEventWindowTimeRangeRequest> $TimeRanges
 * @property string $CronExpression
 */
class ModifyInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Name?: string,
     *     InstanceEventWindowId: string,
     *     TimeRanges?: list<Shapes\InstanceEventWindowTimeRangeRequest>,
     *     CronExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
