<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $glueLineageSyncEnabled
 * @property string|null $roleArn
 */
class IamPropertiesInput extends Shape
{
    /**
     * @param array{
     *     glueLineageSyncEnabled?: bool|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
