<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property KinesisStreamsOutput|null $KinesisStreamsOutput
 * @property KinesisFirehoseOutput|null $KinesisFirehoseOutput
 * @property LambdaOutput|null $LambdaOutput
 * @property DestinationSchema $DestinationSchema
 */
class Output extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     KinesisStreamsOutput?: KinesisStreamsOutput|null,
     *     KinesisFirehoseOutput?: KinesisFirehoseOutput|null,
     *     LambdaOutput?: LambdaOutput|null,
     *     DestinationSchema: DestinationSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
