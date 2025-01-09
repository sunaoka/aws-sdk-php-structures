<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DaysAfterInitiation
 */
class AwsS3BucketBucketLifecycleConfigurationRulesAbortIncompleteMultipartUploadDetails extends Shape
{
    /**
     * @param array{DaysAfterInitiation?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
