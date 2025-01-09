<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3AccessControlList $AccessControlList
 * @property 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control' $CannedAccessControlList
 */
class S3AccessControlPolicy extends Shape
{
    /**
     * @param array{
     *     AccessControlList?: S3AccessControlList,
     *     CannedAccessControlList?: 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
