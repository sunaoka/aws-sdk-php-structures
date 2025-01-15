<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CrawlId
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|'STOPPED'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Summary
 * @property string|null $ErrorMessage
 * @property string|null $LogGroup
 * @property string|null $LogStream
 * @property string|null $MessagePrefix
 * @property double|null $DPUHour
 */
class CrawlerHistory extends Shape
{
    /**
     * @param array{
     *     CrawlId?: string|null,
     *     State?: 'RUNNING'|'COMPLETED'|'FAILED'|'STOPPED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Summary?: string|null,
     *     ErrorMessage?: string|null,
     *     LogGroup?: string|null,
     *     LogStream?: string|null,
     *     MessagePrefix?: string|null,
     *     DPUHour?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
