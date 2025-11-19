<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $LogUri
 * @property string|null $LogEncryptionKmsKeyId
 * @property string|null $AdditionalInfo
 * @property string|null $AmiVersion
 * @property string|null $ReleaseLabel
 * @property Shapes\JobFlowInstancesConfig $Instances
 * @property list<Shapes\StepConfig>|null $Steps
 * @property list<Shapes\BootstrapActionConfig>|null $BootstrapActions
 * @property list<string>|null $SupportedProducts
 * @property list<Shapes\SupportedProductConfig>|null $NewSupportedProducts
 * @property list<Shapes\Application>|null $Applications
 * @property list<Shapes\Configuration>|null $Configurations
 * @property bool|null $VisibleToAllUsers
 * @property string|null $JobFlowRole
 * @property string|null $ServiceRole
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $SecurityConfiguration
 * @property string|null $AutoScalingRole
 * @property 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'|null $ScaleDownBehavior
 * @property string|null $CustomAmiId
 * @property int|null $EbsRootVolumeSize
 * @property 'SECURITY'|'NONE'|null $RepoUpgradeOnBoot
 * @property Shapes\KerberosAttributes|null $KerberosAttributes
 * @property int|null $StepConcurrencyLevel
 * @property Shapes\ManagedScalingPolicy|null $ManagedScalingPolicy
 * @property list<Shapes\PlacementGroupConfig>|null $PlacementGroupConfigs
 * @property Shapes\AutoTerminationPolicy|null $AutoTerminationPolicy
 * @property string|null $OSReleaseLabel
 * @property int|null $EbsRootVolumeIops
 * @property int|null $EbsRootVolumeThroughput
 * @property bool|null $ExtendedSupport
 * @property Shapes\MonitoringConfiguration|null $MonitoringConfiguration
 */
class RunJobFlowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     LogUri?: string|null,
     *     LogEncryptionKmsKeyId?: string|null,
     *     AdditionalInfo?: string|null,
     *     AmiVersion?: string|null,
     *     ReleaseLabel?: string|null,
     *     Instances: Shapes\JobFlowInstancesConfig,
     *     Steps?: list<Shapes\StepConfig>|null,
     *     BootstrapActions?: list<Shapes\BootstrapActionConfig>|null,
     *     SupportedProducts?: list<string>|null,
     *     NewSupportedProducts?: list<Shapes\SupportedProductConfig>|null,
     *     Applications?: list<Shapes\Application>|null,
     *     Configurations?: list<Shapes\Configuration>|null,
     *     VisibleToAllUsers?: bool|null,
     *     JobFlowRole?: string|null,
     *     ServiceRole?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SecurityConfiguration?: string|null,
     *     AutoScalingRole?: string|null,
     *     ScaleDownBehavior?: 'TERMINATE_AT_INSTANCE_HOUR'|'TERMINATE_AT_TASK_COMPLETION'|null,
     *     CustomAmiId?: string|null,
     *     EbsRootVolumeSize?: int|null,
     *     RepoUpgradeOnBoot?: 'SECURITY'|'NONE'|null,
     *     KerberosAttributes?: Shapes\KerberosAttributes|null,
     *     StepConcurrencyLevel?: int|null,
     *     ManagedScalingPolicy?: Shapes\ManagedScalingPolicy|null,
     *     PlacementGroupConfigs?: list<Shapes\PlacementGroupConfig>|null,
     *     AutoTerminationPolicy?: Shapes\AutoTerminationPolicy|null,
     *     OSReleaseLabel?: string|null,
     *     EbsRootVolumeIops?: int|null,
     *     EbsRootVolumeThroughput?: int|null,
     *     ExtendedSupport?: bool|null,
     *     MonitoringConfiguration?: Shapes\MonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
