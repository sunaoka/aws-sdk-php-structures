<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $S3UrlPrefix
 * @property string $SegmentId
 * @property int $SegmentVersion
 */
class ExportJobResource extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     S3UrlPrefix: string,
     *     SegmentId?: string,
     *     SegmentVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
