<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketNotificationConfigurationS3KeyFilter $S3KeyFilter
 */
class AwsS3BucketNotificationConfigurationFilter extends Shape
{
    /**
     * @param array{S3KeyFilter?: AwsS3BucketNotificationConfigurationS3KeyFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
