<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateBody
 * @property string $TemplateURL
 */
class ValidateTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateBody?: string,
     *     TemplateURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
