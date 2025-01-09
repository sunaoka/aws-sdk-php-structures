<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketObjectLockConfigurationRuleDefaultRetentionDetails $DefaultRetention
 */
class AwsS3BucketObjectLockConfigurationRuleDetails extends Shape
{
    /**
     * @param array{DefaultRetention?: AwsS3BucketObjectLockConfigurationRuleDefaultRetentionDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
