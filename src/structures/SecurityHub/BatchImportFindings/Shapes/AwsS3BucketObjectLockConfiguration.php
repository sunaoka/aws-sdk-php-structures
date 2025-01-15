<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectLockEnabled
 * @property AwsS3BucketObjectLockConfigurationRuleDetails|null $Rule
 */
class AwsS3BucketObjectLockConfiguration extends Shape
{
    /**
     * @param array{
     *     ObjectLockEnabled?: string|null,
     *     Rule?: AwsS3BucketObjectLockConfigurationRuleDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
