<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $RetainStacksOnAccountRemoval
 */
class AutoDeployment extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     RetainStacksOnAccountRemoval?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
