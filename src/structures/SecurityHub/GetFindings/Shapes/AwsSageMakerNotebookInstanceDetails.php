<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AcceleratorTypes
 * @property list<string> $AdditionalCodeRepositories
 * @property string $DefaultCodeRepository
 * @property string $DirectInternetAccess
 * @property string $FailureReason
 * @property AwsSageMakerNotebookInstanceMetadataServiceConfigurationDetails $InstanceMetadataServiceConfiguration
 * @property string $InstanceType
 * @property string $KmsKeyId
 * @property string $NetworkInterfaceId
 * @property string $NotebookInstanceArn
 * @property string $NotebookInstanceLifecycleConfigName
 * @property string $NotebookInstanceName
 * @property string $NotebookInstanceStatus
 * @property string $PlatformIdentifier
 * @property string $RoleArn
 * @property string $RootAccess
 * @property list<string> $SecurityGroups
 * @property string $SubnetId
 * @property string $Url
 * @property int $VolumeSizeInGB
 */
class AwsSageMakerNotebookInstanceDetails extends Shape
{
    /**
     * @param array{
     *     AcceleratorTypes?: list<string>,
     *     AdditionalCodeRepositories?: list<string>,
     *     DefaultCodeRepository?: string,
     *     DirectInternetAccess?: string,
     *     FailureReason?: string,
     *     InstanceMetadataServiceConfiguration?: AwsSageMakerNotebookInstanceMetadataServiceConfigurationDetails,
     *     InstanceType?: string,
     *     KmsKeyId?: string,
     *     NetworkInterfaceId?: string,
     *     NotebookInstanceArn?: string,
     *     NotebookInstanceLifecycleConfigName?: string,
     *     NotebookInstanceName?: string,
     *     NotebookInstanceStatus?: string,
     *     PlatformIdentifier?: string,
     *     RoleArn?: string,
     *     RootAccess?: string,
     *     SecurityGroups?: list<string>,
     *     SubnetId?: string,
     *     Url?: string,
     *     VolumeSizeInGB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
