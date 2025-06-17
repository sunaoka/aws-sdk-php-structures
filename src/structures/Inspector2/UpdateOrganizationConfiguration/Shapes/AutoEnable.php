<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $codeRepository
 * @property bool $ec2
 * @property bool $ecr
 * @property bool|null $lambda
 * @property bool|null $lambdaCode
 */
class AutoEnable extends Shape
{
    /**
     * @param array{
     *     codeRepository?: bool|null,
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
