<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Grant> $Grants
 * @property Owner $Owner
 */
class AccessControlPolicy extends Shape
{
    /**
     * @param array{
     *     Grants?: list<Grant>,
     *     Owner?: Owner
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
