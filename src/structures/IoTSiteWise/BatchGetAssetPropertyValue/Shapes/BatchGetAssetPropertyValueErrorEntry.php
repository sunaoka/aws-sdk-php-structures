<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'AccessDeniedException' $errorCode
 * @property string $errorMessage
 * @property string $entryId
 */
class BatchGetAssetPropertyValueErrorEntry extends Shape
{
    /**
     * @param array{
     *     errorCode: 'ResourceNotFoundException'|'InvalidRequestException'|'AccessDeniedException',
     *     errorMessage: string,
     *     entryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
