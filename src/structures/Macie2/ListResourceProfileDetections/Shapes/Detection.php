<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileDetections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property int|null $count
 * @property string|null $id
 * @property string|null $name
 * @property bool|null $suppressed
 * @property 'CUSTOM'|'MANAGED'|null $type
 */
class Detection extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     count?: int|null,
     *     id?: string|null,
     *     name?: string|null,
     *     suppressed?: bool|null,
     *     type?: 'CUSTOM'|'MANAGED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
