<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TextContent
 * @property string $CodeMD5
 * @property int<0, 52428800> $CodeSize
 * @property S3ApplicationCodeLocationDescription $S3ApplicationCodeLocationDescription
 */
class CodeContentDescription extends Shape
{
    /**
     * @param array{
     *     TextContent?: string,
     *     CodeMD5?: string,
     *     CodeSize?: int<0, 52428800>,
     *     S3ApplicationCodeLocationDescription?: S3ApplicationCodeLocationDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
