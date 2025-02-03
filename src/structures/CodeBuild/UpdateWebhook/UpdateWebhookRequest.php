<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $branchFilter
 * @property bool|null $rotateSecret
 * @property list<list<Shapes\WebhookFilter>>|null $filterGroups
 * @property 'BUILD'|'BUILD_BATCH'|'RUNNER_BUILDKITE_BUILD'|null $buildType
 */
class UpdateWebhookRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     branchFilter?: string|null,
     *     rotateSecret?: bool|null,
     *     filterGroups?: list<list<Shapes\WebhookFilter>>|null,
     *     buildType?: 'BUILD'|'BUILD_BATCH'|'RUNNER_BUILDKITE_BUILD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
