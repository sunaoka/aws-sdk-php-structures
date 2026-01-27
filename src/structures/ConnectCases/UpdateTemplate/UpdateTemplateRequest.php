<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $templateId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property 'Active'|'Inactive'|null $status
 * @property list<Shapes\TemplateRule>|null $rules
 * @property list<Shapes\TagPropagationConfiguration>|null $tagPropagationConfigurations
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     templateId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     layoutConfiguration?: Shapes\LayoutConfiguration|null,
     *     requiredFields?: list<Shapes\RequiredField>|null,
     *     status?: 'Active'|'Inactive'|null,
     *     rules?: list<Shapes\TemplateRule>|null,
     *     tagPropagationConfigurations?: list<Shapes\TagPropagationConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
