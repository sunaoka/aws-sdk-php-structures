<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Statistic
 * @property array<string, string> $Parameters
 */
class StatisticOverride extends Shape
{
    /**
     * @param array{
     *     Statistic: string,
     *     Parameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
