<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileDetections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int $count
 * @property string $id
 * @property string $name
 * @property bool $suppressed
 * @property 'CUSTOM'|'MANAGED' $type
 */
class Detection extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     count?: int,
     *     id?: string,
     *     name?: string,
     *     suppressed?: bool,
     *     type?: 'CUSTOM'|'MANAGED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
