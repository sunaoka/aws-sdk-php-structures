<?php

namespace Sunaoka\Aws\Structures\Ec2\ReportInstanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $Instances
 * @property 'ok'|'impaired' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<'instance-stuck-in-state'|'unresponsive'|'not-accepting-credentials'|'password-not-available'|'performance-network'|'performance-instance-store'|'performance-ebs-volume'|'performance-other'|'other'> $ReasonCodes
 * @property string $Description
 */
class ReportInstanceStatusRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Instances: list<string>,
     *     Status: 'ok'|'impaired',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ReasonCodes: list<'instance-stuck-in-state'|'unresponsive'|'not-accepting-credentials'|'password-not-available'|'performance-network'|'performance-instance-store'|'performance-ebs-volume'|'performance-other'|'other'>,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
