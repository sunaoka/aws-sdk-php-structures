<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateId
 * @property string $id
 */
class GetTemplateStepGroupRequest extends Request
{
    /**
     * @param array{
     *     templateId: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
