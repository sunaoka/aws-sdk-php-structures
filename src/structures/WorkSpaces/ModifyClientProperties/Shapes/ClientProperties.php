<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyClientProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $ReconnectEnabled
 * @property 'ENABLED'|'DISABLED'|null $LogUploadEnabled
 */
class ClientProperties extends Shape
{
    /**
     * @param array{
     *     ReconnectEnabled?: 'ENABLED'|'DISABLED'|null,
     *     LogUploadEnabled?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
