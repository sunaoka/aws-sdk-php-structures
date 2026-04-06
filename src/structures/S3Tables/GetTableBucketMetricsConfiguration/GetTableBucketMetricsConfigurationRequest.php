<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMetricsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 */
class GetTableBucketMetricsConfigurationRequest extends Request
{
    /**
     * @param array{tableBucketARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
