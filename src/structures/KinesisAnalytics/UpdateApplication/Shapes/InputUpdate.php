<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputId
 * @property string $NamePrefixUpdate
 * @property InputProcessingConfigurationUpdate $InputProcessingConfigurationUpdate
 * @property KinesisStreamsInputUpdate $KinesisStreamsInputUpdate
 * @property KinesisFirehoseInputUpdate $KinesisFirehoseInputUpdate
 * @property InputSchemaUpdate $InputSchemaUpdate
 * @property InputParallelismUpdate $InputParallelismUpdate
 */
class InputUpdate extends Shape
{
    /**
     * @param array{
     *     InputId: string,
     *     NamePrefixUpdate?: string,
     *     InputProcessingConfigurationUpdate?: InputProcessingConfigurationUpdate,
     *     KinesisStreamsInputUpdate?: KinesisStreamsInputUpdate,
     *     KinesisFirehoseInputUpdate?: KinesisFirehoseInputUpdate,
     *     InputSchemaUpdate?: InputSchemaUpdate,
     *     InputParallelismUpdate?: InputParallelismUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
