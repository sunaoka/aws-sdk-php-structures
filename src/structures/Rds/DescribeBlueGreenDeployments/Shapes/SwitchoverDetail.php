<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeBlueGreenDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceMember
 * @property string|null $TargetMember
 * @property string|null $Status
 */
class SwitchoverDetail extends Shape
{
    /**
     * @param array{
     *     SourceMember?: string|null,
     *     TargetMember?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
