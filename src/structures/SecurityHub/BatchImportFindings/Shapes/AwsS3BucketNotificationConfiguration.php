<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketNotificationConfigurationDetail>|null $Configurations
 */
class AwsS3BucketNotificationConfiguration extends Shape
{
    /**
     * @param array{Configurations?: list<AwsS3BucketNotificationConfigurationDetail>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
