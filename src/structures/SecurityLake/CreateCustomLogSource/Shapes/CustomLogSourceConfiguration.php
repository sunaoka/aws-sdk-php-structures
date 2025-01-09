<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateCustomLogSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomLogSourceCrawlerConfiguration $crawlerConfiguration
 * @property AwsIdentity $providerIdentity
 */
class CustomLogSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration: CustomLogSourceCrawlerConfiguration,
     *     providerIdentity: AwsIdentity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
