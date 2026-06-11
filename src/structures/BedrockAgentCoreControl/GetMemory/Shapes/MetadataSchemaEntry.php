<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'STRING'|'STRINGLIST'|'NUMBER'|null $type
 * @property 'LLM_INFERRED'|'STRICTLY_CONSISTENT'|null $extractionType
 * @property ExtractionConfig|null $extractionConfig
 */
class MetadataSchemaEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     type?: 'STRING'|'STRINGLIST'|'NUMBER'|null,
     *     extractionType?: 'LLM_INFERRED'|'STRICTLY_CONSISTENT'|null,
     *     extractionConfig?: ExtractionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
