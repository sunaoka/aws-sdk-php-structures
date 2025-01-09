<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLogsLogGroupArn
 * @property bool $Enabled
 */
class LogPublishingOption extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
