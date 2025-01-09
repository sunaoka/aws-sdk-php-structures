<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 * @property string $templateId
 * @property string $stepGroupId
 */
class ListTemplateStepsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>,
     *     nextToken?: string,
     *     templateId: string,
     *     stepGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
