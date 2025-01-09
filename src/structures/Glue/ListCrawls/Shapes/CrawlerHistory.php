<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CrawlId
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|'STOPPED' $State
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Summary
 * @property string $ErrorMessage
 * @property string $LogGroup
 * @property string $LogStream
 * @property string $MessagePrefix
 * @property double $DPUHour
 */
class CrawlerHistory extends Shape
{
    /**
     * @param array{
     *     CrawlId?: string,
     *     State?: 'RUNNING'|'COMPLETED'|'FAILED'|'STOPPED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Summary?: string,
     *     ErrorMessage?: string,
     *     LogGroup?: string,
     *     LogStream?: string,
     *     MessagePrefix?: string,
     *     DPUHour?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
