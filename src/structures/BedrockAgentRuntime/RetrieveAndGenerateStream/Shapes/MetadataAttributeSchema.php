<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $key
 * @property 'STRING'|'NUMBER'|'BOOLEAN'|'STRING_LIST' $type
 */
class MetadataAttributeSchema extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     key: string,
     *     type: 'STRING'|'NUMBER'|'BOOLEAN'|'STRING_LIST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
