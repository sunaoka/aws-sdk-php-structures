<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSourceUrl
 */
class ImportDataSourceConfig extends Shape
{
    /**
     * @param array{dataSourceUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
