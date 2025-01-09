<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchResultExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportSpecification $s3ExportSpecification
 */
class ExportSpecification extends Shape
{
    /**
     * @param array{s3ExportSpecification?: S3ExportSpecification} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
