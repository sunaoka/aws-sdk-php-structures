<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $RetainStacksOnAccountRemoval
 */
class AutoDeployment extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     RetainStacksOnAccountRemoval?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
