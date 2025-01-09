<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 * @property StructuredMessage $dataType
 */
class StructuredMessageFieldNameAndDataTypePair extends Shape
{
    /**
     * @param array{
     *     fieldName: string,
     *     dataType: StructuredMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
