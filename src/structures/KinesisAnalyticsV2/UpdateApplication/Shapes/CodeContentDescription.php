<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TextContent
 * @property string $CodeMD5
 * @property int $CodeSize
 * @property S3ApplicationCodeLocationDescription $S3ApplicationCodeLocationDescription
 */
class CodeContentDescription extends Shape
{
    /**
     * @param array{
     *     TextContent?: string,
     *     CodeMD5?: string,
     *     CodeSize?: int,
     *     S3ApplicationCodeLocationDescription?: S3ApplicationCodeLocationDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
