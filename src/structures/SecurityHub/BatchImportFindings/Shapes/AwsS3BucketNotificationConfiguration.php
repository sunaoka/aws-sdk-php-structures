<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketNotificationConfigurationDetail> $Configurations
 */
class AwsS3BucketNotificationConfiguration extends Shape
{
    /**
     * @param array{Configurations?: list<AwsS3BucketNotificationConfigurationDetail>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
