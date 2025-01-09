<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $Database
 * @property string $QueryString
 * @property string $WorkGroup
 * @property string $OutputS3Uri
 * @property string $KmsKeyId
 * @property 'PARQUET'|'ORC'|'AVRO'|'JSON'|'TEXTFILE' $OutputFormat
 * @property 'GZIP'|'SNAPPY'|'ZLIB' $OutputCompression
 */
class AthenaDatasetDefinition extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Database: string,
     *     QueryString: string,
     *     WorkGroup?: string,
     *     OutputS3Uri: string,
     *     KmsKeyId?: string,
     *     OutputFormat: 'PARQUET'|'ORC'|'AVRO'|'JSON'|'TEXTFILE',
     *     OutputCompression?: 'GZIP'|'SNAPPY'|'ZLIB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
