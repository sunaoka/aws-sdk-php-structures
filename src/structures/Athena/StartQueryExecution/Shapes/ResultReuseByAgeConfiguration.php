<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int<0, 10080> $MaxAgeInMinutes
 */
class ResultReuseByAgeConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxAgeInMinutes?: int<0, 10080>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
