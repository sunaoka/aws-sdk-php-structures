<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceId
 * @property string $InstanceEventId
 * @property \Aws\Api\DateTimeResult $NotBefore
 */
class ModifyInstanceEventStartTimeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceId: string,
     *     InstanceEventId: string,
     *     NotBefore: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
