<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $LastFailureMessage
 * @property string $LastFailureTime
 * @property string $LastSuccessfulDeliveryTime
 * @property bool $LoggingEnabled
 * @property string $S3KeyPrefix
 */
class AwsRedshiftClusterLoggingStatus extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     LastFailureMessage?: string,
     *     LastFailureTime?: string,
     *     LastSuccessfulDeliveryTime?: string,
     *     LoggingEnabled?: bool,
     *     S3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
