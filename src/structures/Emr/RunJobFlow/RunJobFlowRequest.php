<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $LogUri
 * @property string $LogEncryptionKmsKeyId
 * @property string $AdditionalInfo
 * @property string $AmiVersion
 * @property string $ReleaseLabel
 * @property Shapes\JobFlowInstancesConfig $Instances
 * @property list<Shapes\StepConfig> $Steps
 * @property list<Shapes\BootstrapActionConfig> $BootstrapActions
 * @property list<string> $SupportedProducts
 * @property list<Shapes\SupportedProductConfig> $NewSupportedProducts
 * @property list<Shapes\Application> $Applications
 * @property list<Shapes\Configuration> $Configurations
 * @property bool $VisibleToAllUsers
 * @property string $JobFlowRole
 * @property string $ServiceRole
 * @property list<Shapes\Tag> $Tags
 * @property string $SecurityConfiguration
 * @property string $AutoScalingRole
 * @property 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION' $ScaleDownBehavior
 * @property string $CustomAmiId
 * @property int $EbsRootVolumeSize
 * @property 'SECURITY'|'NONE' $RepoUpgradeOnBoot
 * @property Shapes\KerberosAttributes $KerberosAttributes
 * @property int $StepConcurrencyLevel
 * @property Shapes\ManagedScalingPolicy $ManagedScalingPolicy
 * @property list<Shapes\PlacementGroupConfig> $PlacementGroupConfigs
 * @property Shapes\AutoTerminationPolicy $AutoTerminationPolicy
 * @property string $OSReleaseLabel
 * @property int $EbsRootVolumeIops
 * @property int $EbsRootVolumeThroughput
 */
class RunJobFlowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     LogUri?: string,
     *     LogEncryptionKmsKeyId?: string,
     *     AdditionalInfo?: string,
     *     AmiVersion?: string,
     *     ReleaseLabel?: string,
     *     Instances: Shapes\JobFlowInstancesConfig,
     *     Steps?: list<Shapes\StepConfig>,
     *     BootstrapActions?: list<Shapes\BootstrapActionConfig>,
     *     SupportedProducts?: list<string>,
     *     NewSupportedProducts?: list<Shapes\SupportedProductConfig>,
     *     Applications?: list<Shapes\Application>,
     *     Configurations?: list<Shapes\Configuration>,
     *     VisibleToAllUsers?: bool,
     *     JobFlowRole?: string,
     *     ServiceRole?: string,
     *     Tags?: list<Shapes\Tag>,
     *     SecurityConfiguration?: string,
     *     AutoScalingRole?: string,
     *     ScaleDownBehavior?: 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION',
     *     CustomAmiId?: string,
     *     EbsRootVolumeSize?: int,
     *     RepoUpgradeOnBoot?: 'SECURITY'|'NONE',
     *     KerberosAttributes?: Shapes\KerberosAttributes,
     *     StepConcurrencyLevel?: int,
     *     ManagedScalingPolicy?: Shapes\ManagedScalingPolicy,
     *     PlacementGroupConfigs?: list<Shapes\PlacementGroupConfig>,
     *     AutoTerminationPolicy?: Shapes\AutoTerminationPolicy,
     *     OSReleaseLabel?: string,
     *     EbsRootVolumeIops?: int,
     *     EbsRootVolumeThroughput?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
