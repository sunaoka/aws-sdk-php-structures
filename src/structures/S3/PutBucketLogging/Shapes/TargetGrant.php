<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Grantee $Grantee
 * @property 'FULL_CONTROL'|'READ'|'WRITE' $Permission
 */
class TargetGrant extends Shape
{
    /**
     * @param array{
     *     Grantee?: Grantee,
     *     Permission?: 'FULL_CONTROL'|'READ'|'WRITE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
