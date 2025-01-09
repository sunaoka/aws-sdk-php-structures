<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketBucketLifecycleConfigurationRulesDetails> $Rules
 */
class AwsS3BucketBucketLifecycleConfigurationDetails extends Shape
{
    /**
     * @param array{Rules?: list<AwsS3BucketBucketLifecycleConfigurationRulesDetails>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
