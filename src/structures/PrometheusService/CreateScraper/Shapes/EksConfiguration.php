<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 */
class EksConfiguration extends Shape
{
    /**
     * @param array{
     *     clusterArn: string,
     *     securityGroupIds?: list<string>,
     *     subnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
