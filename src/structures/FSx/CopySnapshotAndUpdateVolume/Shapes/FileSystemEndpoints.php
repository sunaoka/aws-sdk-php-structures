<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileSystemEndpoint|null $Intercluster
 * @property FileSystemEndpoint|null $Management
 */
class FileSystemEndpoints extends Shape
{
    /**
     * @param array{
     *     Intercluster?: FileSystemEndpoint|null,
     *     Management?: FileSystemEndpoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
