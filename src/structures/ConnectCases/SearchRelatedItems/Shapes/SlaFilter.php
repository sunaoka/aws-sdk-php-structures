<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'Active'|'Overdue'|'Met'|'NotMet'|null $status
 */
class SlaFilter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: 'Active'|'Overdue'|'Met'|'NotMet'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
