<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverBlueGreenDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceMember
 * @property string $TargetMember
 * @property string $Status
 */
class SwitchoverDetail extends Shape
{
    /**
     * @param array{
     *     SourceMember?: string,
     *     TargetMember?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
