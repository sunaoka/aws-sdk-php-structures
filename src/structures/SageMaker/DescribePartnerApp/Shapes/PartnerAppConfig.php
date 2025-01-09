<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AdminUsers
 * @property array<string, string> $Arguments
 */
class PartnerAppConfig extends Shape
{
    /**
     * @param array{
     *     AdminUsers?: list<string>,
     *     Arguments?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
