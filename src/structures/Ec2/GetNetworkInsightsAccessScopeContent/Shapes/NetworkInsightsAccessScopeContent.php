<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInsightsAccessScopeId
 * @property list<AccessScopePath> $MatchPaths
 * @property list<AccessScopePath> $ExcludePaths
 */
class NetworkInsightsAccessScopeContent extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId?: string,
     *     MatchPaths?: list<AccessScopePath>,
     *     ExcludePaths?: list<AccessScopePath>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
