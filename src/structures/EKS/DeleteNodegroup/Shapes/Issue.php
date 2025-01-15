<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AutoScalingGroupNotFound'|'AutoScalingGroupInvalidConfiguration'|'Ec2SecurityGroupNotFound'|'Ec2SecurityGroupDeletionFailure'|'Ec2LaunchTemplateNotFound'|'Ec2LaunchTemplateVersionMismatch'|'Ec2SubnetNotFound'|'Ec2SubnetInvalidConfiguration'|'IamInstanceProfileNotFound'|'Ec2SubnetMissingIpv6Assignment'|'IamLimitExceeded'|'IamNodeRoleNotFound'|'NodeCreationFailure'|'AsgInstanceLaunchFailures'|'InstanceLimitExceeded'|'InsufficientFreeAddresses'|'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'AmiIdNotFound'|'AutoScalingGroupOptInRequired'|'AutoScalingGroupRateLimitExceeded'|'Ec2LaunchTemplateDeletionFailure'|'Ec2LaunchTemplateInvalidConfiguration'|'Ec2LaunchTemplateMaxLimitExceeded'|'Ec2SubnetListTooLong'|'IamThrottling'|'NodeTerminationFailure'|'PodEvictionFailure'|'SourceEc2LaunchTemplateNotFound'|'LimitExceeded'|'Unknown'|'AutoScalingGroupInstanceRefreshActive'|'KubernetesLabelInvalid'|'Ec2LaunchTemplateVersionMaxLimitExceeded'|'Ec2InstanceTypeDoesNotExist'|null $code
 * @property string|null $message
 * @property list<string>|null $resourceIds
 */
class Issue extends Shape
{
    /**
     * @param array{
     *     code?: 'AutoScalingGroupNotFound'|'AutoScalingGroupInvalidConfiguration'|'Ec2SecurityGroupNotFound'|'Ec2SecurityGroupDeletionFailure'|'Ec2LaunchTemplateNotFound'|'Ec2LaunchTemplateVersionMismatch'|'Ec2SubnetNotFound'|'Ec2SubnetInvalidConfiguration'|'IamInstanceProfileNotFound'|'Ec2SubnetMissingIpv6Assignment'|'IamLimitExceeded'|'IamNodeRoleNotFound'|'NodeCreationFailure'|'AsgInstanceLaunchFailures'|'InstanceLimitExceeded'|'InsufficientFreeAddresses'|'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'AmiIdNotFound'|'AutoScalingGroupOptInRequired'|'AutoScalingGroupRateLimitExceeded'|'Ec2LaunchTemplateDeletionFailure'|'Ec2LaunchTemplateInvalidConfiguration'|'Ec2LaunchTemplateMaxLimitExceeded'|'Ec2SubnetListTooLong'|'IamThrottling'|'NodeTerminationFailure'|'PodEvictionFailure'|'SourceEc2LaunchTemplateNotFound'|'LimitExceeded'|'Unknown'|'AutoScalingGroupInstanceRefreshActive'|'KubernetesLabelInvalid'|'Ec2LaunchTemplateVersionMaxLimitExceeded'|'Ec2InstanceTypeDoesNotExist'|null,
     *     message?: string|null,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
