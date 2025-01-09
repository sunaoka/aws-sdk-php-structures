<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $glueLineageSyncEnabled
 */
class IamPropertiesInput extends Shape
{
    /**
     * @param array{glueLineageSyncEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
