<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LogGroupName
 * @property string|null $LogStreamName
 */
class CloudWatchLoggingOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LogGroupName?: string|null,
     *     LogStreamName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
