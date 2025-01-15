<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainId
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property string $name
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property 'Active'|'Inactive'|null $status
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainId: string,
     *     layoutConfiguration?: Shapes\LayoutConfiguration|null,
     *     name: string,
     *     requiredFields?: list<Shapes\RequiredField>|null,
     *     status?: 'Active'|'Inactive'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
