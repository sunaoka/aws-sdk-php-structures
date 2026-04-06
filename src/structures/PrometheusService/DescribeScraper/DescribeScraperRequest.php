<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scraperId
 */
class DescribeScraperRequest extends Request
{
    /**
     * @param array{scraperId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
