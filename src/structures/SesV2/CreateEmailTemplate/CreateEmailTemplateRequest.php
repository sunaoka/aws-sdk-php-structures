<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property Shapes\EmailTemplateContent $TemplateContent
 */
class CreateEmailTemplateRequest extends Request
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
