<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerPath
 * @property bool $readOnly
 * @property string $sourceVolume
 */
class MountPoint extends Shape
{
    /**
     * @param array{
     *     containerPath?: string,
     *     readOnly?: bool,
     *     sourceVolume?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
