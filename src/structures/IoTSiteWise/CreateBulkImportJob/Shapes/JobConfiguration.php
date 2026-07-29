<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileFormat|null $fileFormat
 */
class JobConfiguration extends Shape
{
    /**
     * @param array{fileFormat?: FileFormat|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
