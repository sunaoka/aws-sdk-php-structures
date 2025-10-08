<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCrawlerSchedule;

trait UpdateCrawlerScheduleTrait
{
    /**
     * @param UpdateCrawlerScheduleRequest $args
     * @return UpdateCrawlerScheduleResponse
     */
    public function updateCrawlerSchedule(UpdateCrawlerScheduleRequest $args)
    {
        $result = parent::updateCrawlerSchedule($args->toArray());
        return new UpdateCrawlerScheduleResponse($result->toArray());
    }
}
