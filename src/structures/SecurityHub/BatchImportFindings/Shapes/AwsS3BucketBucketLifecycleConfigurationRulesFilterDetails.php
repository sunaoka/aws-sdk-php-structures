<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateDetails $Predicate
 */
class AwsS3BucketBucketLifecycleConfigurationRulesFilterDetails extends Shape
{
    /**
     * @param array{Predicate?: AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
