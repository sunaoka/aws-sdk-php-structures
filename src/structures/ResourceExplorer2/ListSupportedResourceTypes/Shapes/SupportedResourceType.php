<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListSupportedResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Service
 * @property string|null $ResourceType
 */
class SupportedResourceType extends Shape
{
    /**
     * @param array{
     *     Service?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
