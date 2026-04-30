<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'STRING'|'STRINGLIST'|'NUMBER'|null $type
 * @property ExtractionConfig|null $extractionConfig
 */
class MetadataSchemaEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     type?: 'STRING'|'STRINGLIST'|'NUMBER'|null,
     *     extractionConfig?: ExtractionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
