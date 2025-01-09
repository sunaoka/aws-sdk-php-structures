<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 * @property string $ProfileId
 */
class BatchGetProfileError extends Shape
{
    /**
     * @param array{
     *     Code: string,
     *     Message: string,
     *     ProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
