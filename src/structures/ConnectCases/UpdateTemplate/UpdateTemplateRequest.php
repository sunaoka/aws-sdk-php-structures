<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainId
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property string|null $name
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property list<Shapes\TemplateRule>|null $rules
 * @property 'Active'|'Inactive'|null $status
 * @property string $templateId
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainId: string,
     *     layoutConfiguration?: Shapes\LayoutConfiguration|null,
     *     name?: string|null,
     *     requiredFields?: list<Shapes\RequiredField>|null,
     *     rules?: list<Shapes\TemplateRule>|null,
     *     status?: 'Active'|'Inactive'|null,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
