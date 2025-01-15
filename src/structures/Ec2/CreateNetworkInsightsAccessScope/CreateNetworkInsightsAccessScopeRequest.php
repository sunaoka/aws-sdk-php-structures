<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AccessScopePathRequest>|null $MatchPaths
 * @property list<Shapes\AccessScopePathRequest>|null $ExcludePaths
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateNetworkInsightsAccessScopeRequest extends Request
{
    /**
     * @param array{
     *     MatchPaths?: list<Shapes\AccessScopePathRequest>|null,
     *     ExcludePaths?: list<Shapes\AccessScopePathRequest>|null,
     *     ClientToken: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
