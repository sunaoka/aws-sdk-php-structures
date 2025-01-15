<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeneratedTemplateName
 * @property string|null $NewGeneratedTemplateName
 * @property list<Shapes\ResourceDefinition>|null $AddResources
 * @property list<string>|null $RemoveResources
 * @property bool|null $RefreshAllResources
 * @property Shapes\TemplateConfiguration|null $TemplateConfiguration
 */
class UpdateGeneratedTemplateRequest extends Request
{
    /**
     * @param array{
     *     GeneratedTemplateName: string,
     *     NewGeneratedTemplateName?: string|null,
     *     AddResources?: list<Shapes\ResourceDefinition>|null,
     *     RemoveResources?: list<string>|null,
     *     RefreshAllResources?: bool|null,
     *     TemplateConfiguration?: Shapes\TemplateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
