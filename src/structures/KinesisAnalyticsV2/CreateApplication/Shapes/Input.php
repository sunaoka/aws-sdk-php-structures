<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamePrefix
 * @property InputProcessingConfiguration|null $InputProcessingConfiguration
 * @property KinesisStreamsInput|null $KinesisStreamsInput
 * @property KinesisFirehoseInput|null $KinesisFirehoseInput
 * @property InputParallelism|null $InputParallelism
 * @property SourceSchema $InputSchema
 */
class Input extends Shape
{
    /**
     * @param array{
     *     NamePrefix: string,
     *     InputProcessingConfiguration?: InputProcessingConfiguration|null,
     *     KinesisStreamsInput?: KinesisStreamsInput|null,
     *     KinesisFirehoseInput?: KinesisFirehoseInput|null,
     *     InputParallelism?: InputParallelism|null,
     *     InputSchema: SourceSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
