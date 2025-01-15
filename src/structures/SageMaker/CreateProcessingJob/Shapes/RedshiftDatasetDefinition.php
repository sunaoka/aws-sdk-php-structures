<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterId
 * @property string $Database
 * @property string $DbUser
 * @property string $QueryString
 * @property string $ClusterRoleArn
 * @property string $OutputS3Uri
 * @property string|null $KmsKeyId
 * @property 'PARQUET'|'CSV' $OutputFormat
 * @property 'None'|'GZIP'|'BZIP2'|'ZSTD'|'SNAPPY'|null $OutputCompression
 */
class RedshiftDatasetDefinition extends Shape
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Database: string,
     *     DbUser: string,
     *     QueryString: string,
     *     ClusterRoleArn: string,
     *     OutputS3Uri: string,
     *     KmsKeyId?: string|null,
     *     OutputFormat: 'PARQUET'|'CSV',
     *     OutputCompression?: 'None'|'GZIP'|'BZIP2'|'ZSTD'|'SNAPPY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
