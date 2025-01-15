<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string $dataSetName
 * @property string|null $dataSetOrg
 * @property string|null $format
 * @property \Aws\Api\DateTimeResult|null $lastReferencedTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 */
class DataSetSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     dataSetName: string,
     *     dataSetOrg?: string|null,
     *     format?: string|null,
     *     lastReferencedTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
