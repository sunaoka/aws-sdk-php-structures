<?php

namespace Sunaoka\Aws\Structures\Iot\ListMitigationActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property string $actionArn
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class MitigationActionIdentifier extends Shape
{
    /**
     * @param array{
     *     actionName?: string,
     *     actionArn?: string,
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
