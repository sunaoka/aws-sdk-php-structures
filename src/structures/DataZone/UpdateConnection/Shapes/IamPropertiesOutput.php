<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentId
 * @property bool|null $glueLineageSyncEnabled
 */
class IamPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     glueLineageSyncEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
