<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListSupportedResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Service
 * @property string|null $ResourceType
 * @property list<string>|null $CFNResourceTypes
 */
class SupportedResourceType extends Shape
{
    /**
     * @param array{
     *     Service?: string|null,
     *     ResourceType?: string|null,
     *     CFNResourceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
