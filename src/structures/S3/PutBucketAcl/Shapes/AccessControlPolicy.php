<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Grant>|null $Grants
 * @property Owner|null $Owner
 */
class AccessControlPolicy extends Shape
{
    /**
     * @param array{
     *     Grants?: list<Grant>|null,
     *     Owner?: Owner|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
