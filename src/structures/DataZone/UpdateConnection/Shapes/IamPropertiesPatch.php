<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $glueLineageSyncEnabled
 */
class IamPropertiesPatch extends Shape
{
    /**
     * @param array{glueLineageSyncEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
