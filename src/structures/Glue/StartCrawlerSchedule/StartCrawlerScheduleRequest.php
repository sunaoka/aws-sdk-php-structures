<?php

namespace Sunaoka\Aws\Structures\Glue\StartCrawlerSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrawlerName
 */
class StartCrawlerScheduleRequest extends Request
{
    /**
     * @param array{CrawlerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
