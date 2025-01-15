<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerPath
 * @property bool|null $readOnly
 * @property string|null $sourceVolume
 */
class MountPoint extends Shape
{
    /**
     * @param array{
     *     containerPath?: string|null,
     *     readOnly?: bool|null,
     *     sourceVolume?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
