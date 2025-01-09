<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EmailTemplateRequest $EmailTemplateRequest
 * @property string $TemplateName
 */
class CreateEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     EmailTemplateRequest: Shapes\EmailTemplateRequest,
     *     TemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
