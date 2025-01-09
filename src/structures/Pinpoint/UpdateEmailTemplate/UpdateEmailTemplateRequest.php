<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $CreateNewVersion
 * @property Shapes\EmailTemplateRequest $EmailTemplateRequest
 * @property string $TemplateName
 * @property string $Version
 */
class UpdateEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool,
     *     EmailTemplateRequest: Shapes\EmailTemplateRequest,
     *     TemplateName: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
