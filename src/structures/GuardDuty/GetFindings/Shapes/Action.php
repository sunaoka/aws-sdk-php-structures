<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionType
 * @property AwsApiCallAction $AwsApiCallAction
 * @property DnsRequestAction $DnsRequestAction
 * @property NetworkConnectionAction $NetworkConnectionAction
 * @property PortProbeAction $PortProbeAction
 * @property KubernetesApiCallAction $KubernetesApiCallAction
 * @property RdsLoginAttemptAction $RdsLoginAttemptAction
 * @property KubernetesPermissionCheckedDetails $KubernetesPermissionCheckedDetails
 * @property KubernetesRoleBindingDetails $KubernetesRoleBindingDetails
 * @property KubernetesRoleDetails $KubernetesRoleDetails
 */
class Action extends Shape
{
    /**
     * @param array{
     *     ActionType?: string,
     *     AwsApiCallAction?: AwsApiCallAction,
     *     DnsRequestAction?: DnsRequestAction,
     *     NetworkConnectionAction?: NetworkConnectionAction,
     *     PortProbeAction?: PortProbeAction,
     *     KubernetesApiCallAction?: KubernetesApiCallAction,
     *     RdsLoginAttemptAction?: RdsLoginAttemptAction,
     *     KubernetesPermissionCheckedDetails?: KubernetesPermissionCheckedDetails,
     *     KubernetesRoleBindingDetails?: KubernetesRoleBindingDetails,
     *     KubernetesRoleDetails?: KubernetesRoleDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
