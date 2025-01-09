<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputId
 * @property string $NameUpdate
 * @property KinesisStreamsOutputUpdate $KinesisStreamsOutputUpdate
 * @property KinesisFirehoseOutputUpdate $KinesisFirehoseOutputUpdate
 * @property LambdaOutputUpdate $LambdaOutputUpdate
 * @property DestinationSchema $DestinationSchemaUpdate
 */
class OutputUpdate extends Shape
{
    /**
     * @param array{
     *     OutputId: string,
     *     NameUpdate?: string,
     *     KinesisStreamsOutputUpdate?: KinesisStreamsOutputUpdate,
     *     KinesisFirehoseOutputUpdate?: KinesisFirehoseOutputUpdate,
     *     LambdaOutputUpdate?: LambdaOutputUpdate,
     *     DestinationSchemaUpdate?: DestinationSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
