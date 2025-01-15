<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'CANCELLED'|'FAILED'|null $Status
 * @property string|null $ErrorMessage
 * @property string|null $LogGroup
 * @property string|null $LogStream
 * @property string|null $MessagePrefix
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class LastCrawlInfo extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'CANCELLED'|'FAILED'|null,
     *     ErrorMessage?: string|null,
     *     LogGroup?: string|null,
     *     LogStream?: string|null,
     *     MessagePrefix?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
