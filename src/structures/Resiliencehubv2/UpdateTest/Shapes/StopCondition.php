<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws:cloudwatch:alarm'|'none' $source
 * @property string $value
 */
class StopCondition extends Shape
{
    /**
     * @param array{
     *     source: 'aws:cloudwatch:alarm'|'none',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
