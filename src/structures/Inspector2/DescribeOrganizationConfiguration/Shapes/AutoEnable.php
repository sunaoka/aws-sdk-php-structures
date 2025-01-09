<?php

namespace Sunaoka\Aws\Structures\Inspector2\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ec2
 * @property bool $ecr
 * @property bool $lambda
 * @property bool $lambdaCode
 */
class AutoEnable extends Shape
{
    /**
     * @param array{
     *     ec2: bool,
     *     ecr: bool,
     *     lambda?: bool,
     *     lambdaCode?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
