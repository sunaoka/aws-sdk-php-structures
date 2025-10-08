<?php

namespace Sunaoka\Aws\Structures\Glue\StopCrawlerSchedule;

trait StopCrawlerScheduleTrait
{
    /**
     * @param StopCrawlerScheduleRequest $args
     * @return StopCrawlerScheduleResponse
     */
    public function stopCrawlerSchedule(StopCrawlerScheduleRequest $args)
    {
        $result = parent::stopCrawlerSchedule($args->toArray());
        return new StopCrawlerScheduleResponse($result->toArray());
    }
}
