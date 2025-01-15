<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $Name
 * @property list<Shapes\InstanceEventWindowTimeRangeRequest>|null $TimeRanges
 * @property string|null $CronExpression
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Name?: string|null,
     *     TimeRanges?: list<Shapes\InstanceEventWindowTimeRangeRequest>|null,
     *     CronExpression?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
