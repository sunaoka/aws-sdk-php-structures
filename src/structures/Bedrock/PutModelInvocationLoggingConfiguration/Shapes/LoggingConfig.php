<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutModelInvocationLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchConfig|null $cloudWatchConfig
 * @property S3Config|null $s3Config
 * @property bool|null $textDataDeliveryEnabled
 * @property bool|null $imageDataDeliveryEnabled
 * @property bool|null $embeddingDataDeliveryEnabled
 * @property bool|null $videoDataDeliveryEnabled
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchConfig?: CloudWatchConfig|null,
     *     s3Config?: S3Config|null,
     *     textDataDeliveryEnabled?: bool|null,
     *     imageDataDeliveryEnabled?: bool|null,
     *     embeddingDataDeliveryEnabled?: bool|null,
     *     videoDataDeliveryEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
