<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $templateName
 * @property string $templateDescription
 * @property string $clientToken
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     templateName?: string,
     *     templateDescription?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
