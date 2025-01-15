<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AcceleratorTypes
 * @property list<string>|null $AdditionalCodeRepositories
 * @property string|null $DefaultCodeRepository
 * @property string|null $DirectInternetAccess
 * @property string|null $FailureReason
 * @property AwsSageMakerNotebookInstanceMetadataServiceConfigurationDetails|null $InstanceMetadataServiceConfiguration
 * @property string|null $InstanceType
 * @property string|null $KmsKeyId
 * @property string|null $NetworkInterfaceId
 * @property string|null $NotebookInstanceArn
 * @property string|null $NotebookInstanceLifecycleConfigName
 * @property string|null $NotebookInstanceName
 * @property string|null $NotebookInstanceStatus
 * @property string|null $PlatformIdentifier
 * @property string|null $RoleArn
 * @property string|null $RootAccess
 * @property list<string>|null $SecurityGroups
 * @property string|null $SubnetId
 * @property string|null $Url
 * @property int|null $VolumeSizeInGB
 */
class AwsSageMakerNotebookInstanceDetails extends Shape
{
    /**
     * @param array{
     *     AcceleratorTypes?: list<string>|null,
     *     AdditionalCodeRepositories?: list<string>|null,
     *     DefaultCodeRepository?: string|null,
     *     DirectInternetAccess?: string|null,
     *     FailureReason?: string|null,
     *     InstanceMetadataServiceConfiguration?: AwsSageMakerNotebookInstanceMetadataServiceConfigurationDetails|null,
     *     InstanceType?: string|null,
     *     KmsKeyId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     NotebookInstanceArn?: string|null,
     *     NotebookInstanceLifecycleConfigName?: string|null,
     *     NotebookInstanceName?: string|null,
     *     NotebookInstanceStatus?: string|null,
     *     PlatformIdentifier?: string|null,
     *     RoleArn?: string|null,
     *     RootAccess?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     SubnetId?: string|null,
     *     Url?: string|null,
     *     VolumeSizeInGB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
