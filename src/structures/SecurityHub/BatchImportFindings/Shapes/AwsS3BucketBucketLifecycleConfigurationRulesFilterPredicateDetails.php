<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsDetails> $Operands
 * @property string $Prefix
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateTagDetails $Tag
 * @property string $Type
 */
class AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateDetails extends Shape
{
    /**
     * @param array{
     *     Operands?: list<AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsDetails>,
     *     Prefix?: string,
     *     Tag?: AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateTagDetails,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
