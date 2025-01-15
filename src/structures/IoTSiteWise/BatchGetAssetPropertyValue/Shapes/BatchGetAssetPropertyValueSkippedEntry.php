<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property 'SUCCESS'|'ERROR' $completionStatus
 * @property BatchGetAssetPropertyValueErrorInfo|null $errorInfo
 */
class BatchGetAssetPropertyValueSkippedEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     completionStatus: 'SUCCESS'|'ERROR',
     *     errorInfo?: BatchGetAssetPropertyValueErrorInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
