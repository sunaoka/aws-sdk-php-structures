<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $action
 * @property \Aws\Api\DateTimeResult|null $dateAdded
 * @property \Aws\Api\DateTimeResult|null $dateDue
 */
class CisaData extends Shape
{
    /**
     * @param array{
     *     action?: string|null,
     *     dateAdded?: \Aws\Api\DateTimeResult|null,
     *     dateDue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
