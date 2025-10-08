<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainAutoTunes;

trait DescribeDomainAutoTunesTrait
{
    /**
     * @param DescribeDomainAutoTunesRequest $args
     * @return DescribeDomainAutoTunesResponse
     */
    public function describeDomainAutoTunes(DescribeDomainAutoTunesRequest $args)
    {
        $result = parent::describeDomainAutoTunes($args->toArray());
        return new DescribeDomainAutoTunesResponse($result->toArray());
    }
}
