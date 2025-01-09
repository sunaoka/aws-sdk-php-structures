<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BOOL'|'BYTE'|'CHAR'|'FLOAT32'|'FLOAT64'|'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'STRING'|'WSTRING' $primitiveType
 * @property double $offset
 * @property double $scaling
 * @property int<0, 2048> $upperBound
 */
class ROS2PrimitiveMessageDefinition extends Shape
{
    /**
     * @param array{
     *     primitiveType: 'BOOL'|'BYTE'|'CHAR'|'FLOAT32'|'FLOAT64'|'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'STRING'|'WSTRING',
     *     offset?: double,
     *     scaling?: double,
     *     upperBound?: int<0, 2048>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
