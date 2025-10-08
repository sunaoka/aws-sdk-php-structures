<?php

namespace Sunaoka\Aws\Structures\Rds\DownloadDBLogFilePortion;

trait DownloadDBLogFilePortionTrait
{
    /**
     * @param DownloadDBLogFilePortionRequest $args
     * @return DownloadDBLogFilePortionResponse
     */
    public function downloadDBLogFilePortion(DownloadDBLogFilePortionRequest $args)
    {
        $result = parent::downloadDBLogFilePortion($args->toArray());
        return new DownloadDBLogFilePortionResponse($result->toArray());
    }
}
