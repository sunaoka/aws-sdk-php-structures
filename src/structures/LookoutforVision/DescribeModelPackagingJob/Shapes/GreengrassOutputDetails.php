<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComponentVersionArn
 * @property string $ComponentName
 * @property string $ComponentVersion
 */
class GreengrassOutputDetails extends Shape
{
    /**
     * @param array{
     *     ComponentVersionArn?: string,
     *     ComponentName?: string,
     *     ComponentVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
