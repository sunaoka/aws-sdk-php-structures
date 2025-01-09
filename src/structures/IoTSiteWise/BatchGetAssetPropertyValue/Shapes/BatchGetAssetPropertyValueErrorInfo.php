<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'AccessDeniedException' $errorCode
 * @property \Aws\Api\DateTimeResult $errorTimestamp
 */
class BatchGetAssetPropertyValueErrorInfo extends Shape
{
    /**
     * @param array{
     *     errorCode: 'ResourceNotFoundException'|'InvalidRequestException'|'AccessDeniedException',
     *     errorTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
