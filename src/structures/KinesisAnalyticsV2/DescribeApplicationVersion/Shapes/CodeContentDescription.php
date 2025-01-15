<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TextContent
 * @property string|null $CodeMD5
 * @property int<0, 52428800>|null $CodeSize
 * @property S3ApplicationCodeLocationDescription|null $S3ApplicationCodeLocationDescription
 */
class CodeContentDescription extends Shape
{
    /**
     * @param array{
     *     TextContent?: string|null,
     *     CodeMD5?: string|null,
     *     CodeSize?: int<0, 52428800>|null,
     *     S3ApplicationCodeLocationDescription?: S3ApplicationCodeLocationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
