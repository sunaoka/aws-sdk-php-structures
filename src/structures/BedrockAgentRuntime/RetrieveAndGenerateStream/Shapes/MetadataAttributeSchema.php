<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'STRING'|'NUMBER'|'BOOLEAN'|'STRING_LIST' $type
 * @property string $description
 */
class MetadataAttributeSchema extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     type: 'STRING'|'NUMBER'|'BOOLEAN'|'STRING_LIST',
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
