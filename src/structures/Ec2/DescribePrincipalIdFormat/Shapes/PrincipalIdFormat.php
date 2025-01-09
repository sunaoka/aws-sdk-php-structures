<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrincipalIdFormat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<IdFormat> $Statuses
 */
class PrincipalIdFormat extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Statuses?: list<IdFormat>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
