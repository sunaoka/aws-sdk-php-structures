<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrimitiveMessageDefinition|null $primitiveMessageDefinition
 * @property StructuredMessageListDefinition|null $structuredMessageListDefinition
 * @property list<StructuredMessageFieldNameAndDataTypePair>|null $structuredMessageDefinition
 */
class StructuredMessage extends Shape
{
    /**
     * @param array{
     *     primitiveMessageDefinition?: PrimitiveMessageDefinition|null,
     *     structuredMessageListDefinition?: StructuredMessageListDefinition|null,
     *     structuredMessageDefinition?: list<StructuredMessageFieldNameAndDataTypePair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
