<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property 'JSON'|'PARQUET'|null $dataFormat
 * @property 'NONE'|'GZIP'|null $storageCompressionFormat
 * @property string|null $prefix
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     dataFormat?: 'JSON'|'PARQUET'|null,
     *     storageCompressionFormat?: 'NONE'|'GZIP'|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
