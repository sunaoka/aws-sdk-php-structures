<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mlInputChannelArn
 * @property string $channelName
 * @property 'FullyReplicated'|'ShardedByS3Key'|null $s3DataDistributionType
 */
class ModelTrainingDataChannel extends Shape
{
    /**
     * @param array{
     *     mlInputChannelArn: string,
     *     channelName: string,
     *     s3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
