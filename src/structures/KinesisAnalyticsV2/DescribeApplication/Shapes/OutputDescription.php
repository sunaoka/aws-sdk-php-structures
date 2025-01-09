<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputId
 * @property string $Name
 * @property KinesisStreamsOutputDescription $KinesisStreamsOutputDescription
 * @property KinesisFirehoseOutputDescription $KinesisFirehoseOutputDescription
 * @property LambdaOutputDescription $LambdaOutputDescription
 * @property DestinationSchema $DestinationSchema
 */
class OutputDescription extends Shape
{
    /**
     * @param array{
     *     OutputId?: string,
     *     Name?: string,
     *     KinesisStreamsOutputDescription?: KinesisStreamsOutputDescription,
     *     KinesisFirehoseOutputDescription?: KinesisFirehoseOutputDescription,
     *     LambdaOutputDescription?: LambdaOutputDescription,
     *     DestinationSchema?: DestinationSchema
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
