<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPRECATED'|'DISABLED'|'ACTIVE'|null $status
 * @property string|null $reason
 */
class ComponentState extends Shape
{
    /**
     * @param array{
     *     status?: 'DEPRECATED'|'DISABLED'|'ACTIVE'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
