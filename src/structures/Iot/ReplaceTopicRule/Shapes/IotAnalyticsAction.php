<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property string $channelName
 * @property bool $batchMode
 * @property string $roleArn
 */
class IotAnalyticsAction extends Shape
{
    /**
     * @param array{
     *     channelArn?: string,
     *     channelName?: string,
     *     batchMode?: bool,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
