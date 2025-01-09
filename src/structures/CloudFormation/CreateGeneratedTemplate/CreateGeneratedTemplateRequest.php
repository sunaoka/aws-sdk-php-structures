<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ResourceDefinition> $Resources
 * @property string $GeneratedTemplateName
 * @property string $StackName
 * @property Shapes\TemplateConfiguration $TemplateConfiguration
 */
class CreateGeneratedTemplateRequest extends Request
{
    /**
     * @param array{
     *     Resources?: list<Shapes\ResourceDefinition>,
     *     GeneratedTemplateName: string,
     *     StackName?: string,
     *     TemplateConfiguration?: Shapes\TemplateConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
