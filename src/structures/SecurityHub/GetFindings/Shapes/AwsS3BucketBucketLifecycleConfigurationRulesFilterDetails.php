<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateDetails|null $Predicate
 */
class AwsS3BucketBucketLifecycleConfigurationRulesFilterDetails extends Shape
{
    /**
     * @param array{Predicate?: AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
