<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsDetails>|null $Operands
 * @property string|null $Prefix
 * @property AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateTagDetails|null $Tag
 * @property string|null $Type
 */
class AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateDetails extends Shape
{
    /**
     * @param array{
     *     Operands?: list<AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateOperandsDetails>|null,
     *     Prefix?: string|null,
     *     Tag?: AwsS3BucketBucketLifecycleConfigurationRulesFilterPredicateTagDetails|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
