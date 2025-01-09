<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalNumberOfFiles
 * @property int $IngestedNumberOfFiles
 * @property list<S3Object> $DiscardedFiles
 */
class IngestedFilesSummary extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfFiles: int,
     *     IngestedNumberOfFiles: int,
     *     DiscardedFiles?: list<S3Object>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
