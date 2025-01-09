<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchResultExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationBucket
 * @property string $DestinationPrefix
 */
class S3ExportSpecification extends Shape
{
    /**
     * @param array{
     *     DestinationBucket: string,
     *     DestinationPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
