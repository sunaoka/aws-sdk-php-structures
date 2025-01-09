<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPRECATED'|'DISABLED'|'ACTIVE' $status
 * @property string $reason
 */
class ComponentState extends Shape
{
    /**
     * @param array{
     *     status?: 'DEPRECATED'|'DISABLED'|'ACTIVE',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
