<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
