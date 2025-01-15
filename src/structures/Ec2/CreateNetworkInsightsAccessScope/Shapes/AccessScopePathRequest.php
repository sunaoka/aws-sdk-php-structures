<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PathStatementRequest|null $Source
 * @property PathStatementRequest|null $Destination
 * @property list<ThroughResourcesStatementRequest>|null $ThroughResources
 */
class AccessScopePathRequest extends Shape
{
    /**
     * @param array{
     *     Source?: PathStatementRequest|null,
     *     Destination?: PathStatementRequest|null,
     *     ThroughResources?: list<ThroughResourcesStatementRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
