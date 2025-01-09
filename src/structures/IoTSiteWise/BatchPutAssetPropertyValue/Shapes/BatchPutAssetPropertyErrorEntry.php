<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchPutAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property list<BatchPutAssetPropertyError> $errors
 */
class BatchPutAssetPropertyErrorEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     errors: list<BatchPutAssetPropertyError>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
