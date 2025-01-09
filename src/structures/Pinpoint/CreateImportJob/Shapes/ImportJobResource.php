<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DefineSegment
 * @property string $ExternalId
 * @property 'CSV'|'JSON' $Format
 * @property bool $RegisterEndpoints
 * @property string $RoleArn
 * @property string $S3Url
 * @property string $SegmentId
 * @property string $SegmentName
 */
class ImportJobResource extends Shape
{
    /**
     * @param array{
     *     DefineSegment?: bool,
     *     ExternalId?: string,
     *     Format: 'CSV'|'JSON',
     *     RegisterEndpoints?: bool,
     *     RoleArn: string,
     *     S3Url: string,
     *     SegmentId?: string,
     *     SegmentName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
