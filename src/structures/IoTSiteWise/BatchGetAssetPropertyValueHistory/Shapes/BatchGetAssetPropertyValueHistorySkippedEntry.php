<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property 'SUCCESS'|'ERROR' $completionStatus
 * @property BatchGetAssetPropertyValueHistoryErrorInfo $errorInfo
 */
class BatchGetAssetPropertyValueHistorySkippedEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     completionStatus: 'SUCCESS'|'ERROR',
     *     errorInfo?: BatchGetAssetPropertyValueHistoryErrorInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
