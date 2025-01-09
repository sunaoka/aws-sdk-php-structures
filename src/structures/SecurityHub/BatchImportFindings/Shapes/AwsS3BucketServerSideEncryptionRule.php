<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketServerSideEncryptionByDefault $ApplyServerSideEncryptionByDefault
 */
class AwsS3BucketServerSideEncryptionRule extends Shape
{
    /**
     * @param array{ApplyServerSideEncryptionByDefault?: AwsS3BucketServerSideEncryptionByDefault} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
