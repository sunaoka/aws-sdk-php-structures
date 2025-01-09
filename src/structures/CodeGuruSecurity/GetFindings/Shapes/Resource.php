<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $subResourceId
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     subResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
