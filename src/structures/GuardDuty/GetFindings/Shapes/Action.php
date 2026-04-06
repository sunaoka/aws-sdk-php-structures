<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionType
 * @property AwsApiCallAction|null $AwsApiCallAction
 * @property DnsRequestAction|null $DnsRequestAction
 * @property NetworkConnectionAction|null $NetworkConnectionAction
 * @property PortProbeAction|null $PortProbeAction
 * @property KubernetesApiCallAction|null $KubernetesApiCallAction
 * @property RdsLoginAttemptAction|null $RdsLoginAttemptAction
 */
class Action extends Shape
{
    /**
     * @param array{
     *     ActionType?: string|null,
     *     AwsApiCallAction?: AwsApiCallAction|null,
     *     DnsRequestAction?: DnsRequestAction|null,
     *     NetworkConnectionAction?: NetworkConnectionAction|null,
     *     PortProbeAction?: PortProbeAction|null,
     *     KubernetesApiCallAction?: KubernetesApiCallAction|null,
     *     RdsLoginAttemptAction?: RdsLoginAttemptAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
