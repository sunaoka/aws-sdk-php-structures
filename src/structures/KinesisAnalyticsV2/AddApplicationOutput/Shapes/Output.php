<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property KinesisStreamsOutput $KinesisStreamsOutput
 * @property KinesisFirehoseOutput $KinesisFirehoseOutput
 * @property LambdaOutput $LambdaOutput
 * @property DestinationSchema $DestinationSchema
 */
class Output extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     KinesisStreamsOutput?: KinesisStreamsOutput,
     *     KinesisFirehoseOutput?: KinesisFirehoseOutput,
     *     LambdaOutput?: LambdaOutput,
     *     DestinationSchema: DestinationSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
