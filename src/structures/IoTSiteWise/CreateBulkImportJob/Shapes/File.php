<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string|null $versionId
 */
class File extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     versionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
