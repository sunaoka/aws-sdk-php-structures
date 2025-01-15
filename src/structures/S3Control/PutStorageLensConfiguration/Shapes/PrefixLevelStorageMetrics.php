<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsEnabled
 * @property SelectionCriteria|null $SelectionCriteria
 */
class PrefixLevelStorageMetrics extends Shape
{
    /**
     * @param array{
     *     IsEnabled?: bool|null,
     *     SelectionCriteria?: SelectionCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
