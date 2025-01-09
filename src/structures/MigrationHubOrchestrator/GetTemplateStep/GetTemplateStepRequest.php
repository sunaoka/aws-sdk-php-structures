<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $templateId
 * @property string $stepGroupId
 */
class GetTemplateStepRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     templateId: string,
     *     stepGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
