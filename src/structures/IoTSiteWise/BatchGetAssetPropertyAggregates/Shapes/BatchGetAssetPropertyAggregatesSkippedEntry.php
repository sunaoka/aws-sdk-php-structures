<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property 'SUCCESS'|'ERROR' $completionStatus
 * @property BatchGetAssetPropertyAggregatesErrorInfo $errorInfo
 */
class BatchGetAssetPropertyAggregatesSkippedEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     completionStatus: 'SUCCESS'|'ERROR',
     *     errorInfo?: BatchGetAssetPropertyAggregatesErrorInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
