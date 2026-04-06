<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetUploadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $UpdatedRecords
 * @property int|null $CreatedRecords
 * @property int|null $FailedRecords
 */
class ResultsSummary extends Shape
{
    /**
     * @param array{
     *     UpdatedRecords?: int|null,
     *     CreatedRecords?: int|null,
     *     FailedRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
