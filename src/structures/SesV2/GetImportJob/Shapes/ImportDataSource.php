<?php

namespace Sunaoka\Aws\Structures\SesV2\GetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Url
 * @property 'CSV'|'JSON' $DataFormat
 */
class ImportDataSource extends Shape
{
    /**
     * @param array{
     *     S3Url: string,
     *     DataFormat: 'CSV'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
