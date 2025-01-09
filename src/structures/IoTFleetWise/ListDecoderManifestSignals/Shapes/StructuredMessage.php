<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrimitiveMessageDefinition $primitiveMessageDefinition
 * @property StructuredMessageListDefinition $structuredMessageListDefinition
 * @property list<StructuredMessageFieldNameAndDataTypePair> $structuredMessageDefinition
 */
class StructuredMessage extends Shape
{
    /**
     * @param array{
     *     primitiveMessageDefinition?: PrimitiveMessageDefinition,
     *     structuredMessageListDefinition?: StructuredMessageListDefinition,
     *     structuredMessageDefinition?: list<StructuredMessageFieldNameAndDataTypePair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
