<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetImportedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $customModelUnitsPerModelCopy
 * @property string|null $customModelUnitsVersion
 */
class CustomModelUnits extends Shape
{
    /**
     * @param array{
     *     customModelUnitsPerModelCopy?: int|null,
     *     customModelUnitsVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
