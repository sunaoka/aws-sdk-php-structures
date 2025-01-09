<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'JSON'|'YAML' $Format
 * @property string $GeneratedTemplateName
 */
class GetGeneratedTemplateRequest extends Request
{
    /**
     * @param array{
     *     Format?: 'JSON'|'YAML',
     *     GeneratedTemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
