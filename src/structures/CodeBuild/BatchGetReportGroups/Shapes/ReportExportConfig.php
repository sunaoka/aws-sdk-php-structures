<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReportGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'NO_EXPORT'|null $exportConfigType
 * @property S3ReportExportConfig|null $s3Destination
 */
class ReportExportConfig extends Shape
{
    /**
     * @param array{
     *     exportConfigType?: 'S3'|'NO_EXPORT'|null,
     *     s3Destination?: S3ReportExportConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
