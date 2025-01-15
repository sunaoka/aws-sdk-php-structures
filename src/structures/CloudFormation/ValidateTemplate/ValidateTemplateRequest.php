<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 */
class ValidateTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
