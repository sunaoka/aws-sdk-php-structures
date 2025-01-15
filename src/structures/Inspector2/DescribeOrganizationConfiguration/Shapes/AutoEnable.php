<?php

namespace Sunaoka\Aws\Structures\Inspector2\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ec2
 * @property bool $ecr
 * @property bool|null $lambda
 * @property bool|null $lambdaCode
 */
class AutoEnable extends Shape
{
    /**
     * @param array{
     *     ec2: bool,
     *     ecr: bool,
     *     lambda?: bool|null,
     *     lambdaCode?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
