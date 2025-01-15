<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TextContentUpdate
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFileContentUpdate
 * @property S3ContentLocationUpdate|null $S3ContentLocationUpdate
 */
class CodeContentUpdate extends Shape
{
    /**
     * @param array{
     *     TextContentUpdate?: string|null,
     *     ZipFileContentUpdate?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3ContentLocationUpdate?: S3ContentLocationUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
