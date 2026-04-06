<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RecordDeAggregation'|'Decompression'|'CloudWatchLogProcessing'|'Lambda'|'MetadataExtraction'|'AppendDelimiterToRecord' $Type
 * @property list<ProcessorParameter>|null $Parameters
 */
class Processor extends Shape
{
    /**
     * @param array{
     *     Type: 'RecordDeAggregation'|'Decompression'|'CloudWatchLogProcessing'|'Lambda'|'MetadataExtraction'|'AppendDelimiterToRecord',
     *     Parameters?: list<ProcessorParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
