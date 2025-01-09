<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationAuthorizationConfigDetails $AuthorizationConfig
 * @property string $FilesystemId
 * @property string $RootDirectory
 * @property string $TransitEncryption
 * @property int $TransitEncryptionPort
 */
class AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     AuthorizationConfig?: AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationAuthorizationConfigDetails,
     *     FilesystemId?: string,
     *     RootDirectory?: string,
     *     TransitEncryption?: string,
     *     TransitEncryptionPort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
