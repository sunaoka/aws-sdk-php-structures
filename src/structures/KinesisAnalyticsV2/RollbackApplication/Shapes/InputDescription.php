<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputId
 * @property string|null $NamePrefix
 * @property list<string>|null $InAppStreamNames
 * @property InputProcessingConfigurationDescription|null $InputProcessingConfigurationDescription
 * @property KinesisStreamsInputDescription|null $KinesisStreamsInputDescription
 * @property KinesisFirehoseInputDescription|null $KinesisFirehoseInputDescription
 * @property SourceSchema|null $InputSchema
 * @property InputParallelism|null $InputParallelism
 * @property InputStartingPositionConfiguration|null $InputStartingPositionConfiguration
 */
class InputDescription extends Shape
{
    /**
     * @param array{
     *     InputId?: string|null,
     *     NamePrefix?: string|null,
     *     InAppStreamNames?: list<string>|null,
     *     InputProcessingConfigurationDescription?: InputProcessingConfigurationDescription|null,
     *     KinesisStreamsInputDescription?: KinesisStreamsInputDescription|null,
     *     KinesisFirehoseInputDescription?: KinesisFirehoseInputDescription|null,
     *     InputSchema?: SourceSchema|null,
     *     InputParallelism?: InputParallelism|null,
     *     InputStartingPositionConfiguration?: InputStartingPositionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
