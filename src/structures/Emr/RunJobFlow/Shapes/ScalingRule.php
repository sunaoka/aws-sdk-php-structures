<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property ScalingAction $Action
 * @property ScalingTrigger $Trigger
 */
class ScalingRule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Action: ScalingAction,
     *     Trigger: ScalingTrigger
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
