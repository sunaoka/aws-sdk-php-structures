<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GeneratedTemplateName
 */
class DescribeGeneratedTemplateRequest extends Request
{
    /**
     * @param array{GeneratedTemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
