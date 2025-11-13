<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameworkMappingDetails|null $Framework
 * @property CommonControlMappingDetails|null $CommonControl
 * @property RelatedControlMappingDetails|null $RelatedControl
 */
class Mapping extends Shape
{
    /**
     * @param array{
     *     Framework?: FrameworkMappingDetails|null,
     *     CommonControl?: CommonControlMappingDetails|null,
     *     RelatedControl?: RelatedControlMappingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
