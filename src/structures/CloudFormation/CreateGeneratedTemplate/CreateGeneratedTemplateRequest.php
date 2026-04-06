<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ResourceDefinition>|null $Resources
 * @property string $GeneratedTemplateName
 * @property string|null $StackName
 * @property Shapes\TemplateConfiguration|null $TemplateConfiguration
 */
class CreateGeneratedTemplateRequest extends Request
{
    /**
     * @param array{
     *     Resources?: list<Shapes\ResourceDefinition>|null,
     *     GeneratedTemplateName: string,
     *     StackName?: string|null,
     *     TemplateConfiguration?: Shapes\TemplateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
