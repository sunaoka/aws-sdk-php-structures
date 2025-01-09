<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property bool $required
 * @property 'string'|'number'|'integer'|'boolean'|'array' $type
 */
class ParameterDetail extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     required?: bool,
     *     type: 'string'|'number'|'integer'|'boolean'|'array'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
