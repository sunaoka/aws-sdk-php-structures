<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyClientProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ReconnectEnabled
 * @property 'ENABLED'|'DISABLED' $LogUploadEnabled
 */
class ClientProperties extends Shape
{
    /**
     * @param array{
     *     ReconnectEnabled?: 'ENABLED'|'DISABLED',
     *     LogUploadEnabled?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
