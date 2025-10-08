<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ConfigurationState
 * @property MetadataTableEncryptionConfiguration|null $EncryptionConfiguration
 */
class InventoryTableConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationState: 'ENABLED'|'DISABLED',
     *     EncryptionConfiguration?: MetadataTableEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
