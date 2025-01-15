<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DefineSegment
 * @property string|null $ExternalId
 * @property 'CSV'|'JSON' $Format
 * @property bool|null $RegisterEndpoints
 * @property string $RoleArn
 * @property string $S3Url
 * @property string|null $SegmentId
 * @property string|null $SegmentName
 */
class ImportJobResource extends Shape
{
    /**
     * @param array{
     *     DefineSegment?: bool|null,
     *     ExternalId?: string|null,
     *     Format: 'CSV'|'JSON',
     *     RegisterEndpoints?: bool|null,
     *     RoleArn: string,
     *     S3Url: string,
     *     SegmentId?: string|null,
     *     SegmentName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
