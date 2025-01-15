<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $Message
 */
class RuntimeVersionError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
