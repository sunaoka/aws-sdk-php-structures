<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string|null $templateDescription
 * @property Shapes\TemplateSource $templateSource
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateDescription?: string|null,
     *     templateSource: Shapes\TemplateSource,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
