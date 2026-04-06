<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper;

trait DescribeScraperTrait
{
    /**
     * @param DescribeScraperRequest $args
     * @return DescribeScraperResponse
     */
    public function describeScraper(DescribeScraperRequest $args)
    {
        $result = parent::describeScraper($args->toArray());
        return new DescribeScraperResponse($result->toArray());
    }
}
