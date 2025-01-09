<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEnabled
 * @property SelectionCriteria $SelectionCriteria
 */
class PrefixLevelStorageMetrics extends Shape
{
    /**
     * @param array{
     *     IsEnabled?: bool,
     *     SelectionCriteria?: SelectionCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
