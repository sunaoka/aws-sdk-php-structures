<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeneratedTemplateName
 */
class DeleteGeneratedTemplateRequest extends Request
{
    /**
     * @param array{GeneratedTemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
