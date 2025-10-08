<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeArchives;

trait DescribeTapeArchivesTrait
{
    /**
     * @param DescribeTapeArchivesRequest $args
     * @return DescribeTapeArchivesResponse
     */
    public function describeTapeArchives(DescribeTapeArchivesRequest $args)
    {
        $result = parent::describeTapeArchives($args->toArray());
        return new DescribeTapeArchivesResponse($result->toArray());
    }
}
