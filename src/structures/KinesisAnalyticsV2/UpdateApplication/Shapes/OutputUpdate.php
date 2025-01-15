<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputId
 * @property string|null $NameUpdate
 * @property KinesisStreamsOutputUpdate|null $KinesisStreamsOutputUpdate
 * @property KinesisFirehoseOutputUpdate|null $KinesisFirehoseOutputUpdate
 * @property LambdaOutputUpdate|null $LambdaOutputUpdate
 * @property DestinationSchema|null $DestinationSchemaUpdate
 */
class OutputUpdate extends Shape
{
    /**
     * @param array{
     *     OutputId: string,
     *     NameUpdate?: string|null,
     *     KinesisStreamsOutputUpdate?: KinesisStreamsOutputUpdate|null,
     *     KinesisFirehoseOutputUpdate?: KinesisFirehoseOutputUpdate|null,
     *     LambdaOutputUpdate?: LambdaOutputUpdate|null,
     *     DestinationSchemaUpdate?: DestinationSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
