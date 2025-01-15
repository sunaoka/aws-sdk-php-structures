<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchResultExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationBucket
 * @property string|null $DestinationPrefix
 */
class S3ExportSpecification extends Shape
{
    /**
     * @param array{
     *     DestinationBucket: string,
     *     DestinationPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
