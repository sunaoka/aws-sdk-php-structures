<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'CANCELLED'|'FAILED' $Status
 * @property string $ErrorMessage
 * @property string $LogGroup
 * @property string $LogStream
 * @property string $MessagePrefix
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class LastCrawlInfo extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'CANCELLED'|'FAILED',
     *     ErrorMessage?: string,
     *     LogGroup?: string,
     *     LogStream?: string,
     *     MessagePrefix?: string,
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
