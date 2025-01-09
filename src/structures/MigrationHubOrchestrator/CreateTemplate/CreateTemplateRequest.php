<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string $templateDescription
 * @property Shapes\TemplateSource $templateSource
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateDescription?: string,
     *     templateSource: Shapes\TemplateSource,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
