<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $MaxAgeInMinutes
 */
class ResultReuseByAgeConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     MaxAgeInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
