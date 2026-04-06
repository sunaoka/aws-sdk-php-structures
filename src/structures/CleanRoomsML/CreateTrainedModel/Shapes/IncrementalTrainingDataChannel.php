<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $trainedModelArn
 * @property string|null $versionIdentifier
 * @property string $channelName
 */
class IncrementalTrainingDataChannel extends Shape
{
    /**
     * @param array{
     *     trainedModelArn: string,
     *     versionIdentifier?: string|null,
     *     channelName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
