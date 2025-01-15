<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TextContent
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFileContent
 * @property S3ContentLocation|null $S3ContentLocation
 */
class CodeContent extends Shape
{
    /**
     * @param array{
     *     TextContent?: string|null,
     *     ZipFileContent?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3ContentLocation?: S3ContentLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
