<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEnabled
 * @property StorageLensCostAndUsageReportsSelectionCriteria|null $SelectionCriteria
 */
class StorageLensCostAndUsageReportsPrefixLevel extends Shape
{
    /**
     * @param array{
     *     IsEnabled: bool,
     *     SelectionCriteria?: StorageLensCostAndUsageReportsSelectionCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
