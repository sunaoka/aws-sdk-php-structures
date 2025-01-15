<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $value
 * @property 'NO_SCHEDULE'|'NO_EXECUTE'|'PREFER_NO_SCHEDULE'|null $effect
 */
class Taint extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     value?: string|null,
     *     effect?: 'NO_SCHEDULE'|'NO_EXECUTE'|'PREFER_NO_SCHEDULE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
