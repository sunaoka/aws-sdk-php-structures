<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $branchFilter
 * @property list<list<Shapes\WebhookFilter>> $filterGroups
 * @property 'BUILD'|'BUILD_BATCH' $buildType
 * @property bool $manualCreation
 * @property Shapes\ScopeConfiguration $scopeConfiguration
 */
class CreateWebhookRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     branchFilter?: string,
     *     filterGroups?: list<list<Shapes\WebhookFilter>>,
     *     buildType?: 'BUILD'|'BUILD_BATCH',
     *     manualCreation?: bool,
     *     scopeConfiguration?: Shapes\ScopeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
