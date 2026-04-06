<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportDataSourceConfig $dataSourceConfig
 */
class ImportDataSource extends Shape
{
    /**
     * @param array{dataSourceConfig: ImportDataSourceConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
