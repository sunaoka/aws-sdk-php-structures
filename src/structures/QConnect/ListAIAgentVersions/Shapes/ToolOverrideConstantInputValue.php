<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'NUMBER'|'JSON_STRING' $type
 * @property string $value
 */
class ToolOverrideConstantInputValue extends Shape
{
    /**
     * @param array{
     *     type: 'STRING'|'NUMBER'|'JSON_STRING',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
