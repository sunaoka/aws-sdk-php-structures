<?php

namespace Sunaoka\Aws\Structures\Glue\StopCrawlerSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrawlerName
 */
class StopCrawlerScheduleRequest extends Request
{
    /**
     * @param array{CrawlerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
