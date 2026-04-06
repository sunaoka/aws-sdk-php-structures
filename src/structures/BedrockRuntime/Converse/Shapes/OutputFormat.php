<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'json_schema' $type
 * @property OutputFormatStructure $structure
 */
class OutputFormat extends Shape
{
    /**
     * @param array{
     *     type: 'json_schema',
     *     structure: OutputFormatStructure
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
