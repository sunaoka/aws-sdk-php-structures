<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLogsLogGroupArn
 * @property bool|null $Enabled
 */
class LogPublishingOption extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsLogGroupArn?: string|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
