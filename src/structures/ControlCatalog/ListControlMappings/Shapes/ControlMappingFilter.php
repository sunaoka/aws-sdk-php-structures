<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ControlArns
 * @property list<string>|null $CommonControlArns
 * @property list<'FRAMEWORK'|'COMMON_CONTROL'>|null $MappingTypes
 */
class ControlMappingFilter extends Shape
{
    /**
     * @param array{
     *     ControlArns?: list<string>|null,
     *     CommonControlArns?: list<string>|null,
     *     MappingTypes?: list<'FRAMEWORK'|'COMMON_CONTROL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
