<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalNumberOfFiles
 * @property int $IngestedNumberOfFiles
 * @property list<S3Object>|null $DiscardedFiles
 */
class IngestedFilesSummary extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfFiles: int,
     *     IngestedNumberOfFiles: int,
     *     DiscardedFiles?: list<S3Object>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
