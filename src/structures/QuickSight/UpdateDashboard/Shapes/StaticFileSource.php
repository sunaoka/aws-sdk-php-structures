<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticFileUrlSourceOptions|null $UrlOptions
 * @property StaticFileS3SourceOptions|null $S3Options
 */
class StaticFileSource extends Shape
{
    /**
     * @param array{
     *     UrlOptions?: StaticFileUrlSourceOptions|null,
     *     S3Options?: StaticFileS3SourceOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
