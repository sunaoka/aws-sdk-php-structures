<?php

namespace Sunaoka\Aws\Structures\Ec2\ReportInstanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $Instances
 * @property 'ok'|'impaired' $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<'instance-stuck-in-state'|'unresponsive'|'not-accepting-credentials'|'password-not-available'|'performance-network'|'performance-instance-store'|'performance-ebs-volume'|'performance-other'|'other'> $ReasonCodes
 * @property string|null $Description
 */
class ReportInstanceStatusRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Instances: list<string>,
     *     Status: 'ok'|'impaired',
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ReasonCodes: list<'instance-stuck-in-state'|'unresponsive'|'not-accepting-credentials'|'password-not-available'|'performance-network'|'performance-instance-store'|'performance-ebs-volume'|'performance-other'|'other'>,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
