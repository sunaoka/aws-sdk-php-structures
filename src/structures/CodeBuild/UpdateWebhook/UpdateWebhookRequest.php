<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $branchFilter
 * @property bool $rotateSecret
 * @property list<list<Shapes\WebhookFilter>> $filterGroups
 * @property 'BUILD'|'BUILD_BATCH' $buildType
 */
class UpdateWebhookRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     branchFilter?: string,
     *     rotateSecret?: bool,
     *     filterGroups?: list<list<Shapes\WebhookFilter>>,
     *     buildType?: 'BUILD'|'BUILD_BATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
