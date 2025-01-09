<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListDataSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $dataSetName
 * @property string $dataSetOrg
 * @property string $format
 * @property \Aws\Api\DateTimeResult $lastReferencedTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class DataSetSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     dataSetName: string,
     *     dataSetOrg?: string,
     *     format?: string,
     *     lastReferencedTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
