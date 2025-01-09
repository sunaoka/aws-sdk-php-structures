<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputId
 * @property string $NamePrefix
 * @property list<string> $InAppStreamNames
 * @property InputProcessingConfigurationDescription $InputProcessingConfigurationDescription
 * @property KinesisStreamsInputDescription $KinesisStreamsInputDescription
 * @property KinesisFirehoseInputDescription $KinesisFirehoseInputDescription
 * @property SourceSchema $InputSchema
 * @property InputParallelism $InputParallelism
 * @property InputStartingPositionConfiguration $InputStartingPositionConfiguration
 */
class InputDescription extends Shape
{
    /**
     * @param array{
     *     InputId?: string,
     *     NamePrefix?: string,
     *     InAppStreamNames?: list<string>,
     *     InputProcessingConfigurationDescription?: InputProcessingConfigurationDescription,
     *     KinesisStreamsInputDescription?: KinesisStreamsInputDescription,
     *     KinesisFirehoseInputDescription?: KinesisFirehoseInputDescription,
     *     InputSchema?: SourceSchema,
     *     InputParallelism?: InputParallelism,
     *     InputStartingPositionConfiguration?: InputStartingPositionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
