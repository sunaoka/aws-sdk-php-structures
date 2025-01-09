<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AutoScalingGroupNotFound'|'AutoScalingGroupInvalidConfiguration'|'Ec2SecurityGroupNotFound'|'Ec2SecurityGroupDeletionFailure'|'Ec2LaunchTemplateNotFound'|'Ec2LaunchTemplateVersionMismatch'|'Ec2SubnetNotFound'|'Ec2SubnetInvalidConfiguration'|'IamInstanceProfileNotFound'|'Ec2SubnetMissingIpv6Assignment'|'IamLimitExceeded'|'IamNodeRoleNotFound'|'NodeCreationFailure'|'AsgInstanceLaunchFailures'|'InstanceLimitExceeded'|'InsufficientFreeAddresses'|'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'AmiIdNotFound'|'AutoScalingGroupOptInRequired'|'AutoScalingGroupRateLimitExceeded'|'Ec2LaunchTemplateDeletionFailure'|'Ec2LaunchTemplateInvalidConfiguration'|'Ec2LaunchTemplateMaxLimitExceeded'|'Ec2SubnetListTooLong'|'IamThrottling'|'NodeTerminationFailure'|'PodEvictionFailure'|'SourceEc2LaunchTemplateNotFound'|'LimitExceeded'|'Unknown'|'AutoScalingGroupInstanceRefreshActive'|'KubernetesLabelInvalid'|'Ec2LaunchTemplateVersionMaxLimitExceeded'|'Ec2InstanceTypeDoesNotExist' $code
 * @property string $message
 * @property list<string> $resourceIds
 */
class Issue extends Shape
{
    /**
     * @param array{
     *     code?: 'AutoScalingGroupNotFound'|'AutoScalingGroupInvalidConfiguration'|'Ec2SecurityGroupNotFound'|'Ec2SecurityGroupDeletionFailure'|'Ec2LaunchTemplateNotFound'|'Ec2LaunchTemplateVersionMismatch'|'Ec2SubnetNotFound'|'Ec2SubnetInvalidConfiguration'|'IamInstanceProfileNotFound'|'Ec2SubnetMissingIpv6Assignment'|'IamLimitExceeded'|'IamNodeRoleNotFound'|'NodeCreationFailure'|'AsgInstanceLaunchFailures'|'InstanceLimitExceeded'|'InsufficientFreeAddresses'|'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'AmiIdNotFound'|'AutoScalingGroupOptInRequired'|'AutoScalingGroupRateLimitExceeded'|'Ec2LaunchTemplateDeletionFailure'|'Ec2LaunchTemplateInvalidConfiguration'|'Ec2LaunchTemplateMaxLimitExceeded'|'Ec2SubnetListTooLong'|'IamThrottling'|'NodeTerminationFailure'|'PodEvictionFailure'|'SourceEc2LaunchTemplateNotFound'|'LimitExceeded'|'Unknown'|'AutoScalingGroupInstanceRefreshActive'|'KubernetesLabelInvalid'|'Ec2LaunchTemplateVersionMaxLimitExceeded'|'Ec2InstanceTypeDoesNotExist',
     *     message?: string,
     *     resourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
