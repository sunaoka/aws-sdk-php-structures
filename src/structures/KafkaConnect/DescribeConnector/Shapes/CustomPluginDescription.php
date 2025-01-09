<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customPluginArn
 * @property int $revision
 */
class CustomPluginDescription extends Shape
{
    /**
     * @param array{
     *     customPluginArn?: string,
     *     revision?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
