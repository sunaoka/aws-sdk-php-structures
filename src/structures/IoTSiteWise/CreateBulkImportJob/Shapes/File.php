<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string|null $versionId
 * @property string|null $alias
 * @property TimeInNanos|null $startTime
 * @property FileFormat|null $fileFormat
 */
class File extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     versionId?: string|null,
     *     alias?: string|null,
     *     startTime?: TimeInNanos|null,
     *     fileFormat?: FileFormat|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
