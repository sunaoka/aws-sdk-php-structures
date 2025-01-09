<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateStepGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 * @property string $templateId
 */
class ListTemplateStepGroupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>,
     *     nextToken?: string,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
