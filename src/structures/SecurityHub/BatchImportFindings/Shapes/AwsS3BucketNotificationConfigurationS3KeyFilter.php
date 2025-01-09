<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketNotificationConfigurationS3KeyFilterRule> $FilterRules
 */
class AwsS3BucketNotificationConfigurationS3KeyFilter extends Shape
{
    /**
     * @param array{FilterRules?: list<AwsS3BucketNotificationConfigurationS3KeyFilterRule>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
