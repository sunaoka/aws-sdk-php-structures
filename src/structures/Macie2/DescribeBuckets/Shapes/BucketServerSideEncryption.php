<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsMasterKeyId
 * @property 'NONE'|'AES256'|'aws:kms'|'aws:kms:dsse' $type
 */
class BucketServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     kmsMasterKeyId?: string,
     *     type?: 'NONE'|'AES256'|'aws:kms'|'aws:kms:dsse'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
