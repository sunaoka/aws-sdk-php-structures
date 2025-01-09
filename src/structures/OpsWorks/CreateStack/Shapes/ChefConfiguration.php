<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ManageBerkshelf
 * @property string $BerkshelfVersion
 */
class ChefConfiguration extends Shape
{
    /**
     * @param array{
     *     ManageBerkshelf?: bool,
     *     BerkshelfVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
