<?php

namespace Sunaoka\Aws\Structures\Organizations\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PolicySummary|null $PolicySummary
 * @property string|null $Content
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     PolicySummary?: PolicySummary|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
