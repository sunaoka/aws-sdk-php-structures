<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutModelInvocationLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property string $roleArn
 * @property S3Config|null $largeDataDeliveryS3Config
 */
class CloudWatchConfig extends Shape
{
    /**
     * @param array{
     *     logGroupName: string,
     *     roleArn: string,
     *     largeDataDeliveryS3Config?: S3Config|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
