<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateStepGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $templateId
 */
class ListTemplateStepGroupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
