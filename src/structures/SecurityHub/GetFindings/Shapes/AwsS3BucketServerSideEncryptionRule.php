<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketServerSideEncryptionByDefault|null $ApplyServerSideEncryptionByDefault
 */
class AwsS3BucketServerSideEncryptionRule extends Shape
{
    /**
     * @param array{ApplyServerSideEncryptionByDefault?: AwsS3BucketServerSideEncryptionByDefault|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
