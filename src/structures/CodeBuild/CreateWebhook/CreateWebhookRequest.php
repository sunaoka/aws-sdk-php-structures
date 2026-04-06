<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $branchFilter
 * @property list<list<Shapes\WebhookFilter>>|null $filterGroups
 * @property 'BUILD'|'BUILD_BATCH'|null $buildType
 */
class CreateWebhookRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     branchFilter?: string|null,
     *     filterGroups?: list<list<Shapes\WebhookFilter>>|null,
     *     buildType?: 'BUILD'|'BUILD_BATCH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
