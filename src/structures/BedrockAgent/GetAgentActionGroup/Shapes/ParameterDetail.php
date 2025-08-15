<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property 'string'|'number'|'integer'|'boolean'|'array' $type
 * @property bool|null $required
 */
class ParameterDetail extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     type: 'string'|'number'|'integer'|'boolean'|'array',
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
