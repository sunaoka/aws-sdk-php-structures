<?php

namespace Sunaoka\Aws\Structures\Organizations\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PolicySummary $PolicySummary
 * @property string $Content
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     PolicySummary?: PolicySummary,
     *     Content?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
