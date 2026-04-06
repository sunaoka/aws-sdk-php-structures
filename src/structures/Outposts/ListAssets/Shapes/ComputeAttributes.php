<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostId
 * @property 'ACTIVE'|'ISOLATED'|'RETIRING'|null $State
 */
class ComputeAttributes extends Shape
{
    /**
     * @param array{
     *     HostId?: string|null,
     *     State?: 'ACTIVE'|'ISOLATED'|'RETIRING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
