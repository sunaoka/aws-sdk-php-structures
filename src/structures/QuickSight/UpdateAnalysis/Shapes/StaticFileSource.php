<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticFileUrlSourceOptions $UrlOptions
 * @property StaticFileS3SourceOptions $S3Options
 */
class StaticFileSource extends Shape
{
    /**
     * @param array{
     *     UrlOptions?: StaticFileUrlSourceOptions,
     *     S3Options?: StaticFileS3SourceOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
