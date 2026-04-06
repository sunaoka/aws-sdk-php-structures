<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LambdaArn'|'NumberOfRetries'|'MetadataExtractionQuery'|'JsonParsingEngine'|'RoleArn'|'BufferSizeInMBs'|'BufferIntervalInSeconds'|'SubRecordType'|'Delimiter'|'CompressionFormat'|'DataMessageExtraction' $ParameterName
 * @property string $ParameterValue
 */
class ProcessorParameter extends Shape
{
    /**
     * @param array{
     *     ParameterName: 'LambdaArn'|'NumberOfRetries'|'MetadataExtractionQuery'|'JsonParsingEngine'|'RoleArn'|'BufferSizeInMBs'|'BufferIntervalInSeconds'|'SubRecordType'|'Delimiter'|'CompressionFormat'|'DataMessageExtraction',
     *     ParameterValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
