<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $subResourceId
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     subResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
