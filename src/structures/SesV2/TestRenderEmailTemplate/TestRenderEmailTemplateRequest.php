<?php

namespace Sunaoka\Aws\Structures\SesV2\TestRenderEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string $TemplateData
 */
class TestRenderEmailTemplateRequest extends Request
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
