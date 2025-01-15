<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputId
 * @property string|null $NamePrefixUpdate
 * @property InputProcessingConfigurationUpdate|null $InputProcessingConfigurationUpdate
 * @property KinesisStreamsInputUpdate|null $KinesisStreamsInputUpdate
 * @property KinesisFirehoseInputUpdate|null $KinesisFirehoseInputUpdate
 * @property InputSchemaUpdate|null $InputSchemaUpdate
 * @property InputParallelismUpdate|null $InputParallelismUpdate
 */
class InputUpdate extends Shape
{
    /**
     * @param array{
     *     InputId: string,
     *     NamePrefixUpdate?: string|null,
     *     InputProcessingConfigurationUpdate?: InputProcessingConfigurationUpdate|null,
     *     KinesisStreamsInputUpdate?: KinesisStreamsInputUpdate|null,
     *     KinesisFirehoseInputUpdate?: KinesisFirehoseInputUpdate|null,
     *     InputSchemaUpdate?: InputSchemaUpdate|null,
     *     InputParallelismUpdate?: InputParallelismUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
