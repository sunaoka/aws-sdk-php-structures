<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsS3BucketServerSideEncryptionRule>|null $Rules
 */
class AwsS3BucketServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{Rules?: list<AwsS3BucketServerSideEncryptionRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
