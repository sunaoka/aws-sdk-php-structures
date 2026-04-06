<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $templateName
 * @property string|null $templateDescription
 * @property string|null $clientToken
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     templateName?: string|null,
     *     templateDescription?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
