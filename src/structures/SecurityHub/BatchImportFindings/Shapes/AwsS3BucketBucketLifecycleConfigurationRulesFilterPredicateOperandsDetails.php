<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsTagDetails $Tag
 * @property string $Type
 */
class AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsDetails extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsTagDetails,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
