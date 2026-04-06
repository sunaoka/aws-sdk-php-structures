<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $propertyId
 * @property string|null $hierarchyId
 */
class VariableValue extends Shape
{
    /**
     * @param array{
     *     propertyId: string,
     *     hierarchyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
