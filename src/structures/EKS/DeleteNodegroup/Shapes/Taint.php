<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 * @property 'NO_SCHEDULE'|'NO_EXECUTE'|'PREFER_NO_SCHEDULE' $effect
 */
class Taint extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     value?: string,
     *     effect?: 'NO_SCHEDULE'|'NO_EXECUTE'|'PREFER_NO_SCHEDULE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
