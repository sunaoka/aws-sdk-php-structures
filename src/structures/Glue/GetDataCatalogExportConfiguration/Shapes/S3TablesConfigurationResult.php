<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableBucketArn
 * @property ExportEncryptionConfiguration|null $EncryptionConfiguration
 */
class S3TablesConfigurationResult extends Shape
{
    /**
     * @param array{
     *     TableBucketArn?: string|null,
     *     EncryptionConfiguration?: ExportEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
