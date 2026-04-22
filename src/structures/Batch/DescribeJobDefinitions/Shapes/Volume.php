<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Host|null $host
 * @property string|null $name
 * @property EFSVolumeConfiguration|null $efsVolumeConfiguration
 * @property S3FilesVolumeConfiguration|null $s3filesVolumeConfiguration
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     host?: Host|null,
     *     name?: string|null,
     *     efsVolumeConfiguration?: EFSVolumeConfiguration|null,
     *     s3filesVolumeConfiguration?: S3FilesVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
