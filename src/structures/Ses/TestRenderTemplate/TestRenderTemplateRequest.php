<?php

namespace Sunaoka\Aws\Structures\Ses\TestRenderTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string $TemplateData
 */
class TestRenderTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     TemplateData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
