<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BOOL'|'BYTE'|'CHAR'|'FLOAT32'|'FLOAT64'|'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'STRING'|'WSTRING' $primitiveType
 * @property double|null $offset
 * @property double|null $scaling
 * @property int<0, 2048>|null $upperBound
 */
class ROS2PrimitiveMessageDefinition extends Shape
{
    /**
     * @param array{
     *     primitiveType: 'BOOL'|'BYTE'|'CHAR'|'FLOAT32'|'FLOAT64'|'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'STRING'|'WSTRING',
     *     offset?: double|null,
     *     scaling?: double|null,
     *     upperBound?: int<0, 2048>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
