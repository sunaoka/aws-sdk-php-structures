<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $LastFailureMessage
 * @property string|null $LastFailureTime
 * @property string|null $LastSuccessfulDeliveryTime
 * @property bool|null $LoggingEnabled
 * @property string|null $S3KeyPrefix
 */
class AwsRedshiftClusterLoggingStatus extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     LastFailureMessage?: string|null,
     *     LastFailureTime?: string|null,
     *     LastSuccessfulDeliveryTime?: string|null,
     *     LoggingEnabled?: bool|null,
     *     S3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
