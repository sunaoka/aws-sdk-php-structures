<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchResultExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportSpecification|null $s3ExportSpecification
 */
class ExportSpecification extends Shape
{
    /**
     * @param array{s3ExportSpecification?: S3ExportSpecification|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
