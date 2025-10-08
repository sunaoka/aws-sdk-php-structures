<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlArn
 * @property 'FRAMEWORK'|'COMMON_CONTROL' $MappingType
 * @property Mapping $Mapping
 */
class ControlMapping extends Shape
{
    /**
     * @param array{
     *     ControlArn: string,
     *     MappingType: 'FRAMEWORK'|'COMMON_CONTROL',
     *     Mapping: Mapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
