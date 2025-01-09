<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Network> $Networks
 * @property list<Network> $AsPath
 * @property 'AWS'|'Internet' $NetworkEventType
 */
class NetworkImpairment extends Shape
{
    /**
     * @param array{
     *     Networks: list<Network>,
     *     AsPath: list<Network>,
     *     NetworkEventType: 'AWS'|'Internet'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
