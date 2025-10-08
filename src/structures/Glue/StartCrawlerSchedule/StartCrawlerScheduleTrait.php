<?php

namespace Sunaoka\Aws\Structures\Glue\StartCrawlerSchedule;

trait StartCrawlerScheduleTrait
{
    /**
     * @param StartCrawlerScheduleRequest $args
     * @return StartCrawlerScheduleResponse
     */
    public function startCrawlerSchedule(StartCrawlerScheduleRequest $args)
    {
        $result = parent::startCrawlerSchedule($args->toArray());
        return new StartCrawlerScheduleResponse($result->toArray());
    }
}
