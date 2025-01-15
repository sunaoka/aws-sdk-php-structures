<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsTagDetails|null $Tag
 * @property string|null $Type
 */
class AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsDetails extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsTagDetails|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
