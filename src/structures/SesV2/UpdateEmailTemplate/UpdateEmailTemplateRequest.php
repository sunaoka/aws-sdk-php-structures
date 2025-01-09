<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property Shapes\EmailTemplateContent $TemplateContent
 */
class UpdateEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     TemplateContent: Shapes\EmailTemplateContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
