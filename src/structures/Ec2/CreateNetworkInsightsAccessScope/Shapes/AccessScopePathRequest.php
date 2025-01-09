<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PathStatementRequest $Source
 * @property PathStatementRequest $Destination
 * @property list<ThroughResourcesStatementRequest> $ThroughResources
 */
class AccessScopePathRequest extends Shape
{
    /**
     * @param array{
     *     Source?: PathStatementRequest,
     *     Destination?: PathStatementRequest,
     *     ThroughResources?: list<ThroughResourcesStatementRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
