<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TextContentUpdate
 * @property string|resource|\Psr\Http\Message\StreamInterface $ZipFileContentUpdate
 * @property S3ContentLocationUpdate $S3ContentLocationUpdate
 */
class CodeContentUpdate extends Shape
{
    /**
     * @param array{
     *     TextContentUpdate?: string,
     *     ZipFileContentUpdate?: string|resource|\Psr\Http\Message\StreamInterface,
     *     S3ContentLocationUpdate?: S3ContentLocationUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
