<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSmsTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SMSTemplateRequest $SMSTemplateRequest
 * @property string $TemplateName
 */
class CreateSmsTemplateRequest extends Request
{
    /**
     * @param array{
     *     SMSTemplateRequest: Shapes\SMSTemplateRequest,
     *     TemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
