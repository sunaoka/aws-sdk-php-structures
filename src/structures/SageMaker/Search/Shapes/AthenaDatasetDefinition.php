<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $Database
 * @property string $QueryString
 * @property string|null $WorkGroup
 * @property string $OutputS3Uri
 * @property string|null $KmsKeyId
 * @property 'PARQUET'|'ORC'|'AVRO'|'JSON'|'TEXTFILE' $OutputFormat
 * @property 'GZIP'|'SNAPPY'|'ZLIB'|null $OutputCompression
 */
class AthenaDatasetDefinition extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Database: string,
     *     QueryString: string,
     *     WorkGroup?: string|null,
     *     OutputS3Uri: string,
     *     KmsKeyId?: string|null,
     *     OutputFormat: 'PARQUET'|'ORC'|'AVRO'|'JSON'|'TEXTFILE',
     *     OutputCompression?: 'GZIP'|'SNAPPY'|'ZLIB'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
