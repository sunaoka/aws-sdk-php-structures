<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customPluginArn
 * @property int|null $revision
 */
class CustomPluginDescription extends Shape
{
    /**
     * @param array{
     *     customPluginArn?: string|null,
     *     revision?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
