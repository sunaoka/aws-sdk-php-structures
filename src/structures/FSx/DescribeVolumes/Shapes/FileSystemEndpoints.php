<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSystemEndpoint $Intercluster
 * @property FileSystemEndpoint $Management
 */
class FileSystemEndpoints extends Shape
{
    /**
     * @param array{
     *     Intercluster?: FileSystemEndpoint,
     *     Management?: FileSystemEndpoint
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
