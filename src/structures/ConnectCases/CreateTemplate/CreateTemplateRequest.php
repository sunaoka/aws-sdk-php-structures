<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $name
 * @property string|null $description
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property 'Active'|'Inactive'|null $status
 * @property list<Shapes\TemplateRule>|null $rules
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     description?: string|null,
     *     layoutConfiguration?: Shapes\LayoutConfiguration|null,
     *     requiredFields?: list<Shapes\RequiredField>|null,
     *     status?: 'Active'|'Inactive'|null,
     *     rules?: list<Shapes\TemplateRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
