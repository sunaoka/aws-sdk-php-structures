<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mlInputChannelArn
 * @property string $channelName
 */
class ModelTrainingDataChannel extends Shape
{
    /**
     * @param array{
     *     mlInputChannelArn: string,
     *     channelName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
