<?php

namespace Sunaoka\Aws\Structures\Ses\GetSendStatistics;

trait GetSendStatisticsTrait
{
    /**
     * @return GetSendStatisticsResponse
     */
    public function getSendStatistics()
    {
        $result = parent::getSendStatistics();
        return new GetSendStatisticsResponse($result->toArray());
    }
}
