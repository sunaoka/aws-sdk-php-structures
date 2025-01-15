<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrincipalIdFormat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<IdFormat>|null $Statuses
 */
class PrincipalIdFormat extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Statuses?: list<IdFormat>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
