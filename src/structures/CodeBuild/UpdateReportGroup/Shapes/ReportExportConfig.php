<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateReportGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'NO_EXPORT' $exportConfigType
 * @property S3ReportExportConfig $s3Destination
 */
class ReportExportConfig extends Shape
{
    /**
     * @param array{
     *     exportConfigType?: 'S3'|'NO_EXPORT',
     *     s3Destination?: S3ReportExportConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
