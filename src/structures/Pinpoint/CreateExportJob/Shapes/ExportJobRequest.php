<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $S3UrlPrefix
 * @property string|null $SegmentId
 * @property int|null $SegmentVersion
 */
class ExportJobRequest extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     S3UrlPrefix: string,
     *     SegmentId?: string|null,
     *     SegmentVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
