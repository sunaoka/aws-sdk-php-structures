<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketNotificationConfigurationS3KeyFilterRule>|null $FilterRules
 */
class AwsS3BucketNotificationConfigurationS3KeyFilter extends Shape
{
    /**
     * @param array{FilterRules?: list<AwsS3BucketNotificationConfigurationS3KeyFilterRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
