<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TextContent
 * @property string|resource|\Psr\Http\Message\StreamInterface $ZipFileContent
 * @property S3ContentLocation $S3ContentLocation
 */
class CodeContent extends Shape
{
    /**
     * @param array{
     *     TextContent?: string,
     *     ZipFileContent?: string|resource|\Psr\Http\Message\StreamInterface,
     *     S3ContentLocation?: S3ContentLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
