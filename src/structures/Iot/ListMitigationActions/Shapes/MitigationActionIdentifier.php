<?php

namespace Sunaoka\Aws\Structures\Iot\ListMitigationActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionName
 * @property string|null $actionArn
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class MitigationActionIdentifier extends Shape
{
    /**
     * @param array{
     *     actionName?: string|null,
     *     actionArn?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
