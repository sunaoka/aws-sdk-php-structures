<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Grantee|null $Grantee
 * @property 'FULL_CONTROL'|'READ'|'WRITE'|null $Permission
 */
class TargetGrant extends Shape
{
    /**
     * @param array{
     *     Grantee?: Grantee|null,
     *     Permission?: 'FULL_CONTROL'|'READ'|'WRITE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
