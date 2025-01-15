<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationAuthorizationConfigDetails|null $AuthorizationConfig
 * @property string|null $FilesystemId
 * @property string|null $RootDirectory
 * @property string|null $TransitEncryption
 * @property int|null $TransitEncryptionPort
 */
class AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     AuthorizationConfig?: AwsEcsTaskDefinitionVolumesEfsVolumeConfigurationAuthorizationConfigDetails|null,
     *     FilesystemId?: string|null,
     *     RootDirectory?: string|null,
     *     TransitEncryption?: string|null,
     *     TransitEncryptionPort?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
