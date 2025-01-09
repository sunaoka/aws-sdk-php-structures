<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainId
 * @property Shapes\LayoutConfiguration $layoutConfiguration
 * @property string $name
 * @property list<Shapes\RequiredField> $requiredFields
 * @property 'Active'|'Inactive' $status
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainId: string,
     *     layoutConfiguration?: Shapes\LayoutConfiguration,
     *     name: string,
     *     requiredFields?: list<Shapes\RequiredField>,
     *     status?: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
