<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputId
 * @property string|null $Name
 * @property KinesisStreamsOutputDescription|null $KinesisStreamsOutputDescription
 * @property KinesisFirehoseOutputDescription|null $KinesisFirehoseOutputDescription
 * @property LambdaOutputDescription|null $LambdaOutputDescription
 * @property DestinationSchema|null $DestinationSchema
 */
class OutputDescription extends Shape
{
    /**
     * @param array{
     *     OutputId?: string|null,
     *     Name?: string|null,
     *     KinesisStreamsOutputDescription?: KinesisStreamsOutputDescription|null,
     *     KinesisFirehoseOutputDescription?: KinesisFirehoseOutputDescription|null,
     *     LambdaOutputDescription?: LambdaOutputDescription|null,
     *     DestinationSchema?: DestinationSchema|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
