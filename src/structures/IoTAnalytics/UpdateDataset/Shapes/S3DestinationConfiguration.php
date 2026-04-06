<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property GlueConfiguration|null $glueConfiguration
 * @property string $roleArn
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     glueConfiguration?: GlueConfiguration|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
