<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PathStatement|null $Source
 * @property PathStatement|null $Destination
 * @property list<ThroughResourcesStatement>|null $ThroughResources
 */
class AccessScopePath extends Shape
{
    /**
     * @param array{
     *     Source?: PathStatement|null,
     *     Destination?: PathStatement|null,
     *     ThroughResources?: list<ThroughResourcesStatement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
