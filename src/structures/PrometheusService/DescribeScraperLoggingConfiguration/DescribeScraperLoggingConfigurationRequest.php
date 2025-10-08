<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraperLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scraperId
 */
class DescribeScraperLoggingConfigurationRequest extends Request
{
    /**
     * @param array{scraperId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
