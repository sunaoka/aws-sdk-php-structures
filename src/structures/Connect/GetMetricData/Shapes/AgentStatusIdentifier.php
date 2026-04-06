<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 */
class AgentStatusIdentifier extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
