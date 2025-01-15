<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $CreateNewVersion
 * @property Shapes\EmailTemplateRequest $EmailTemplateRequest
 * @property string $TemplateName
 * @property string|null $Version
 */
class UpdateEmailTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool|null,
     *     EmailTemplateRequest: Shapes\EmailTemplateRequest,
     *     TemplateName: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
