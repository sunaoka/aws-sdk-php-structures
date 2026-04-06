<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property bool|null $required
 * @property 'string'|'number'|'integer'|'boolean'|'array' $type
 */
class ParameterDetail extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     required?: bool|null,
     *     type: 'string'|'number'|'integer'|'boolean'|'array'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
