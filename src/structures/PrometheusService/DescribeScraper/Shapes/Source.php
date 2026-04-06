<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksConfiguration|null $eksConfiguration
 * @property VpcConfiguration|null $vpcConfiguration
 */
class Source extends Shape
{
    /**
     * @param array{
     *     eksConfiguration?: EksConfiguration|null,
     *     vpcConfiguration?: VpcConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
