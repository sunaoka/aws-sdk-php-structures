<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInsightsAccessScopeId
 * @property list<AccessScopePath>|null $MatchPaths
 * @property list<AccessScopePath>|null $ExcludePaths
 */
class NetworkInsightsAccessScopeContent extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId?: string|null,
     *     MatchPaths?: list<AccessScopePath>|null,
     *     ExcludePaths?: list<AccessScopePath>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
