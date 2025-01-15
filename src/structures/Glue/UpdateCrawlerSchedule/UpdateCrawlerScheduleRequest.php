<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCrawlerSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrawlerName
 * @property string|null $Schedule
 */
class UpdateCrawlerScheduleRequest extends Request
{
    /**
     * @param array{
     *     CrawlerName: string,
     *     Schedule?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
