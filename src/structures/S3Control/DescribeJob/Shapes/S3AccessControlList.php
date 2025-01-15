<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ObjectOwner $Owner
 * @property list<S3Grant>|null $Grants
 */
class S3AccessControlList extends Shape
{
    /**
     * @param array{
     *     Owner: S3ObjectOwner,
     *     Grants?: list<S3Grant>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
