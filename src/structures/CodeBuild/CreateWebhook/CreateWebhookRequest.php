<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $branchFilter
 * @property list<list<Shapes\WebhookFilter>>|null $filterGroups
 * @property 'BUILD'|'BUILD_BATCH'|'RUNNER_BUILDKITE_BUILD'|null $buildType
 * @property bool|null $manualCreation
 * @property Shapes\ScopeConfiguration|null $scopeConfiguration
 * @property Shapes\PullRequestBuildPolicy|null $pullRequestBuildPolicy
 */
class CreateWebhookRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     branchFilter?: string|null,
     *     filterGroups?: list<list<Shapes\WebhookFilter>>|null,
     *     buildType?: 'BUILD'|'BUILD_BATCH'|'RUNNER_BUILDKITE_BUILD'|null,
     *     manualCreation?: bool|null,
     *     scopeConfiguration?: Shapes\ScopeConfiguration|null,
     *     pullRequestBuildPolicy?: Shapes\PullRequestBuildPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
