<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int<0, 10080>|null $MaxAgeInMinutes
 */
class ResultReuseByAgeConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxAgeInMinutes?: int<0, 10080>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
