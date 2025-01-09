<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectLockEnabled
 * @property AwsS3BucketObjectLockConfigurationRuleDetails $Rule
 */
class AwsS3BucketObjectLockConfiguration extends Shape
{
    /**
     * @param array{
     *     ObjectLockEnabled?: string,
     *     Rule?: AwsS3BucketObjectLockConfigurationRuleDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
