<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $CreateNewVersion
 * @property Shapes\SMSTemplateRequest $SMSTemplateRequest
 * @property string $TemplateName
 * @property string $Version
 */
class UpdateSmsTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool,
     *     SMSTemplateRequest: Shapes\SMSTemplateRequest,
     *     TemplateName: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
