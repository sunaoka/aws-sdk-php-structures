<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamePrefix
 * @property InputProcessingConfiguration $InputProcessingConfiguration
 * @property KinesisStreamsInput $KinesisStreamsInput
 * @property KinesisFirehoseInput $KinesisFirehoseInput
 * @property InputParallelism $InputParallelism
 * @property SourceSchema $InputSchema
 */
class Input extends Shape
{
    /**
     * @param array{
     *     NamePrefix: string,
     *     InputProcessingConfiguration?: InputProcessingConfiguration,
     *     KinesisStreamsInput?: KinesisStreamsInput,
     *     KinesisFirehoseInput?: KinesisFirehoseInput,
     *     InputParallelism?: InputParallelism,
     *     InputSchema: SourceSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
