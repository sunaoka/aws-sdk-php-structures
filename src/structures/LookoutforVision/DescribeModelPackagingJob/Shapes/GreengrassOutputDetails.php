<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentVersionArn
 * @property string|null $ComponentName
 * @property string|null $ComponentVersion
 */
class GreengrassOutputDetails extends Shape
{
    /**
     * @param array{
     *     ComponentVersionArn?: string|null,
     *     ComponentName?: string|null,
     *     ComponentVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
