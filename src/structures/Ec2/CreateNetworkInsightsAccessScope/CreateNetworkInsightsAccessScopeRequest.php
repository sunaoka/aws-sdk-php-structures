<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AccessScopePathRequest> $MatchPaths
 * @property list<Shapes\AccessScopePathRequest> $ExcludePaths
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateNetworkInsightsAccessScopeRequest extends Request
{
    /**
     * @param array{
     *     MatchPaths?: list<Shapes\AccessScopePathRequest>,
     *     ExcludePaths?: list<Shapes\AccessScopePathRequest>,
     *     ClientToken: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
