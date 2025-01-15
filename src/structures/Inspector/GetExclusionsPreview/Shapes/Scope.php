<?php

namespace Sunaoka\Aws\Structures\Inspector\GetExclusionsPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSTANCE_ID'|'RULES_PACKAGE_ARN'|null $key
 * @property string|null $value
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     key?: 'INSTANCE_ID'|'RULES_PACKAGE_ARN'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
