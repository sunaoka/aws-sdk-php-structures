<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $environmentId
 * @property bool $glueLineageSyncEnabled
 */
class IamPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     environmentId?: string,
     *     glueLineageSyncEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
