<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property GlueConfiguration $glueConfiguration
 * @property string $roleArn
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     glueConfiguration?: GlueConfiguration,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
