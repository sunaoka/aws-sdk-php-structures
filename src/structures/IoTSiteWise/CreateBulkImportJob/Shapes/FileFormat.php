<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Csv|null $csv
 */
class FileFormat extends Shape
{
    /**
     * @param array{csv?: Csv|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
