<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchConfig $cloudWatchConfig
 * @property S3Config $s3Config
 * @property bool $textDataDeliveryEnabled
 * @property bool $imageDataDeliveryEnabled
 * @property bool $embeddingDataDeliveryEnabled
 * @property bool $videoDataDeliveryEnabled
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchConfig?: CloudWatchConfig,
     *     s3Config?: S3Config,
     *     textDataDeliveryEnabled?: bool,
     *     imageDataDeliveryEnabled?: bool,
     *     embeddingDataDeliveryEnabled?: bool,
     *     videoDataDeliveryEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
