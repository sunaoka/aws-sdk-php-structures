<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $CreateNewVersion
 * @property Shapes\SMSTemplateRequest $SMSTemplateRequest
 * @property string $TemplateName
 * @property string|null $Version
 */
class UpdateSmsTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool|null,
     *     SMSTemplateRequest: Shapes\SMSTemplateRequest,
     *     TemplateName: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
