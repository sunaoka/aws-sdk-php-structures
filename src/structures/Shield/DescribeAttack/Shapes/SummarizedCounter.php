<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property double|null $Max
 * @property double|null $Average
 * @property double|null $Sum
 * @property int|null $N
 * @property string|null $Unit
 */
class SummarizedCounter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Max?: double|null,
     *     Average?: double|null,
     *     Sum?: double|null,
     *     N?: int|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
