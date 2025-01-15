<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Version
 */
class StackConfigurationManager extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
