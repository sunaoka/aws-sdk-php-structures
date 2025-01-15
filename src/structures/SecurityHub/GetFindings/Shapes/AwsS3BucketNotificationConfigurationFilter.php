<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketNotificationConfigurationS3KeyFilter|null $S3KeyFilter
 */
class AwsS3BucketNotificationConfigurationFilter extends Shape
{
    /**
     * @param array{S3KeyFilter?: AwsS3BucketNotificationConfigurationS3KeyFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
