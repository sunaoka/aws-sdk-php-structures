<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property double $Max
 * @property double $Average
 * @property double $Sum
 * @property int $N
 * @property string $Unit
 */
class SummarizedCounter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Max?: double,
     *     Average?: double,
     *     Sum?: double,
     *     N?: int,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
