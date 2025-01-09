<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string $versionId
 */
class File extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     versionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
