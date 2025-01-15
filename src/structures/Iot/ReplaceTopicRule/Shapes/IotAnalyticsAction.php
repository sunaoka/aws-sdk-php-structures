<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $channelArn
 * @property string|null $channelName
 * @property bool|null $batchMode
 * @property string|null $roleArn
 */
class IotAnalyticsAction extends Shape
{
    /**
     * @param array{
     *     channelArn?: string|null,
     *     channelName?: string|null,
     *     batchMode?: bool|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
