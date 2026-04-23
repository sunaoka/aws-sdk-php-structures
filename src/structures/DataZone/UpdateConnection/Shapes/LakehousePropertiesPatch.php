<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $glueLineageSyncEnabled
 */
class LakehousePropertiesPatch extends Shape
{
    /**
     * @param array{glueLineageSyncEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
