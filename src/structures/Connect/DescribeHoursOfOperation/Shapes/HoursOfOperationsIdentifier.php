<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeHoursOfOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string|null $Arn
 */
class HoursOfOperationsIdentifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
