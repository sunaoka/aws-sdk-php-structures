<?php

namespace Sunaoka\Aws\Structures\Ec2\ReportInstanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<string> $Instances
 * @property list<'instance-stuck-in-state'|'unresponsive'|'not-accepting-credentials'|'password-not-available'|'performance-network'|'performance-instance-store'|'performance-ebs-volume'|'performance-other'|'other'> $ReasonCodes
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'ok'|'impaired' $Status
 */
class ReportInstanceStatusRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Instances: list<string>,
     *     ReasonCodes: list<'instance-stuck-in-state'|'unresponsive'|'not-accepting-credentials'|'password-not-available'|'performance-network'|'performance-instance-store'|'performance-ebs-volume'|'performance-other'|'other'>,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Status: 'ok'|'impaired'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
