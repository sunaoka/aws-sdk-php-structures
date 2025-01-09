<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeneratedTemplateName
 * @property string $NewGeneratedTemplateName
 * @property list<Shapes\ResourceDefinition> $AddResources
 * @property list<string> $RemoveResources
 * @property bool $RefreshAllResources
 * @property Shapes\TemplateConfiguration $TemplateConfiguration
 */
class UpdateGeneratedTemplateRequest extends Request
{
    /**
     * @param array{
     *     GeneratedTemplateName: string,
     *     NewGeneratedTemplateName?: string,
     *     AddResources?: list<Shapes\ResourceDefinition>,
     *     RemoveResources?: list<string>,
     *     RefreshAllResources?: bool,
     *     TemplateConfiguration?: Shapes\TemplateConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
