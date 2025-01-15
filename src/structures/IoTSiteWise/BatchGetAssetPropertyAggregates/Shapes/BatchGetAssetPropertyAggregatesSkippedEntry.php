<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property 'SUCCESS'|'ERROR' $completionStatus
 * @property BatchGetAssetPropertyAggregatesErrorInfo|null $errorInfo
 */
class BatchGetAssetPropertyAggregatesSkippedEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     completionStatus: 'SUCCESS'|'ERROR',
     *     errorInfo?: BatchGetAssetPropertyAggregatesErrorInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
