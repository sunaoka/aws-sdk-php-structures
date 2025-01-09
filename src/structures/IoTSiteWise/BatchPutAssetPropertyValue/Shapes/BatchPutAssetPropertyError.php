<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchPutAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException'|'LimitExceededException'|'ConflictingOperationException'|'TimestampOutOfRangeException'|'AccessDeniedException' $errorCode
 * @property string $errorMessage
 * @property list<TimeInNanos> $timestamps
 */
class BatchPutAssetPropertyError extends Shape
{
    /**
     * @param array{
     *     errorCode: 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException'|'LimitExceededException'|'ConflictingOperationException'|'TimestampOutOfRangeException'|'AccessDeniedException',
     *     errorMessage: string,
     *     timestamps: list<TimeInNanos>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
