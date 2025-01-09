<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileFormat $fileFormat
 */
class JobConfiguration extends Shape
{
    /**
     * @param array{fileFormat: FileFormat} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
