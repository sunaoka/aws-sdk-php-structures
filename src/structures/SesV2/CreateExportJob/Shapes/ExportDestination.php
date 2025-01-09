<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON' $DataFormat
 * @property string $S3Url
 */
class ExportDestination extends Shape
{
    /**
     * @param array{
     *     DataFormat: 'CSV'|'JSON',
     *     S3Url?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
