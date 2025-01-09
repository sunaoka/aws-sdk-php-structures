<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property 'JSON'|'PARQUET' $dataFormat
 * @property 'NONE'|'GZIP' $storageCompressionFormat
 * @property string $prefix
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     dataFormat?: 'JSON'|'PARQUET',
     *     storageCompressionFormat?: 'NONE'|'GZIP',
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
