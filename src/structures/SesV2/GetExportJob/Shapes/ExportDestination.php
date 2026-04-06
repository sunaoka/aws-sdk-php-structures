<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON' $DataFormat
 * @property string|null $S3Url
 */
class ExportDestination extends Shape
{
    /**
     * @param array{
     *     DataFormat: 'CSV'|'JSON',
     *     S3Url?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
