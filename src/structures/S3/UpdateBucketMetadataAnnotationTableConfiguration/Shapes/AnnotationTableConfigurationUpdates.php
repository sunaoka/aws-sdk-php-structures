<?php

namespace Sunaoka\Aws\Structures\S3\UpdateBucketMetadataAnnotationTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ConfigurationState
 * @property MetadataTableEncryptionConfiguration|null $EncryptionConfiguration
 * @property string|null $Role
 */
class AnnotationTableConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     ConfigurationState: 'ENABLED'|'DISABLED',
     *     EncryptionConfiguration?: MetadataTableEncryptionConfiguration|null,
     *     Role?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
