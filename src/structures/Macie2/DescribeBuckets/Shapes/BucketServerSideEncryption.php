<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsMasterKeyId
 * @property 'NONE'|'AES256'|'aws:kms'|null $type
 */
class BucketServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     kmsMasterKeyId?: string|null,
     *     type?: 'NONE'|'AES256'|'aws:kms'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
