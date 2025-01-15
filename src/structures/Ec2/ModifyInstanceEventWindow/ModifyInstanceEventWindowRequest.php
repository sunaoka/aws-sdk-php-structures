<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $Name
 * @property string $InstanceEventWindowId
 * @property list<Shapes\InstanceEventWindowTimeRangeRequest>|null $TimeRanges
 * @property string|null $CronExpression
 */
class ModifyInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Name?: string|null,
     *     InstanceEventWindowId: string,
     *     TimeRanges?: list<Shapes\InstanceEventWindowTimeRangeRequest>|null,
     *     CronExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
