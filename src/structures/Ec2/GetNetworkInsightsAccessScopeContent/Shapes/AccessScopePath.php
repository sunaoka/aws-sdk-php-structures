<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PathStatement $Source
 * @property PathStatement $Destination
 * @property list<ThroughResourcesStatement> $ThroughResources
 */
class AccessScopePath extends Shape
{
    /**
     * @param array{
     *     Source?: PathStatement,
     *     Destination?: PathStatement,
     *     ThroughResources?: list<ThroughResourcesStatement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
