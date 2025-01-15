<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListSupportedResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $Service
 */
class SupportedResourceType extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     Service?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
