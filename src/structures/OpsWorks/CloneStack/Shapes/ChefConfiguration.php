<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CloneStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ManageBerkshelf
 * @property string|null $BerkshelfVersion
 */
class ChefConfiguration extends Shape
{
    /**
     * @param array{
     *     ManageBerkshelf?: bool|null,
     *     BerkshelfVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
