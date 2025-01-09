<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceEventWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Name
 * @property list<Shapes\InstanceEventWindowTimeRangeRequest> $TimeRanges
 * @property string $CronExpression
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateInstanceEventWindowRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Name?: string,
     *     TimeRanges?: list<Shapes\InstanceEventWindowTimeRangeRequest>,
     *     CronExpression?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
