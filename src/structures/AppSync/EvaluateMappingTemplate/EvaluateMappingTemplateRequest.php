<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateMappingTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $template
 * @property string $context
 */
class EvaluateMappingTemplateRequest extends Request
{
    /**
     * @param array{
     *     template: string,
     *     context: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
