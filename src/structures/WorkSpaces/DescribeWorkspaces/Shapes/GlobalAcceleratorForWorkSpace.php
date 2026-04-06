<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED_AUTO'|'DISABLED'|'INHERITED' $Mode
 * @property 'TCP'|'NONE'|'INHERITED'|null $PreferredProtocol
 */
class GlobalAcceleratorForWorkSpace extends Shape
{
    /**
     * @param array{
     *     Mode: 'ENABLED_AUTO'|'DISABLED'|'INHERITED',
     *     PreferredProtocol?: 'TCP'|'NONE'|'INHERITED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
